<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');

		if (empty($user)) {
			$this->session->set_flashdata('msg', 'Your session has been expired !');
			redirect(base_url() . 'account/login');
		}
		$this->load->model('User_model');
	}
	public function Index()
	{	
		$rows = $this->User_model->getAllusers();
		$data['rows'] = $rows;
		$this->load->view('admin/role/roles',$data);
	}
}