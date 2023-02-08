<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Backup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		 $this->load->library('session');
		 $this->load->helper('common_helper');


        $user = $this->session->userdata('user');

        if (empty($user)) {
            $this->session->set_flashdata('msg', 'Your session has been expired !');
            redirect(base_url().'account/login');
        }
    }

    public function index()
    {
        $data['user'] = $this->session->userdata('user');
        $this->load->view('admin/database/backup-restore', $data);
    }

	public function backup()
	{
		//  $this->load->model('Retore_model');
		$this->load->dbutil();
        $options = array(
            'format' => 'zip', // gzip, zip, txt
            'add_drop' => true, // Whether to add DROP TABLE statements to backup file
            'add_insert' => true, // Whether to add INSERT data to backup file
            'filename' => 'DB-backup_' . date('Y-m-d_H-i'),
        );

        $backup = $this->dbutil->backup($options);
        if (!write_file('assets/uploads/db_backup/DB-backup_' . date('Y-m-d_H-i') . '.zip', $backup)) {
            echo"database_backup_failed";
        } else {
            echo 'database_backup_completed';
        }
        redirect(base_url('admin/backup'));

		
	}

  public function download()
    {	
		$this->load->helper('download');
        $file = $this->input->get('file');
        $this->data = file_get_contents('assets/uploads/db_backup/' . $file);
        force_download($file, $this->data);
        redirect(base_url('admin/backup'));
    }


	public function delete_file($file)
	{
		 unlink('assets/uploads/db_backup/' . $file);
		 redirect(base_url('admin/backup'));


	}

	public function restore()
    {

		$this->load->library("form_validation");

		if (isset($_FILES["uploaded_file"]) && empty($_FILES['uploaded_file']['name'])) {
			$this->form_validation->set_rules('uploaded_file', 'uploaded_file', 'required');
		} else {
			$this->form_validation->set_rules('uploaded_file','uploaded_file', 'trim');
		}
        if ($this->form_validation->run() == true) {
            $this->load->helper('unzip');
            $config['upload_path'] = 'assets/uploads/db_temp/';
            $config['allowed_types'] = 'zip';
            $config['overwrite'] = true;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('uploaded_file')) {
                $error = $this->upload->display_errors('', ' ');
                echo "<script>alert('.<?=$error?>.')</script>";
                redirect(base_url('admin/backup'));
            } else {
                $data = array('upload_data' => $this->upload->data());
                $backup = "assets/uploads/db_temp/" . $data['upload_data']['file_name'];

            }
            if (!unzip($backup, "assets/uploads/db_temp/", true, true)) {
                echo "<script>alert('Backup Restore Error')</script>";
                redirect(base_url('admin/backup'));
            } else {
                $this->load->dbforge();
                $backup = str_replace('.zip', '', $backup);
                $file_content = file_get_contents($backup . ".sql");
                $this->db->query('USE ' . $this->db->database . ';');
                foreach (explode(";\n", $file_content) as $sql) {
                    $sql = trim($sql);
                    if ($sql) {
                        $this->db->query($sql);
                    }
                }
                // set_alert('success', "Backup Restore Successfully");
            }
            unlink($backup . '.sql');
            unlink($backup . '.zip');
            redirect(base_url('admin/backup'));

        } else {
            $error = $this->form_validation->error_array();
            $array = array('status' => 'fail', 'error' => $error);
        }
        echo json_encode($array);
    }
}
