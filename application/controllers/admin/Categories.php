<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');

		if (empty($user)) {
			$this->session->set_flashdata('msg', 'Your session has been expired !');
			redirect(base_url() . 'account/login');
		}
	}
	public function Index()
	{	
		
		$this->load->model("Category_model");
		$rows = $this->Category_model->getCategories();
		$data['rows'] = $rows;
		$this->load->view('admin/categories/categories',$data);
	}

	public function showCreateForm()
	{
		$html = $this->load->view('admin/categories/create','',true);
		$response['html'] = $html;
		echo json_encode($response);
	}


	public function saveCategory()
	{	
		


		$this->load->model("Category_model");
		$this->load->helper("common_helper");
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category','Category name','trim|required');
		$this->form_validation->set_rules('is_active','is_active name','trim|required');

		if($this->form_validation->run() == true)
		{	
			
				$user = $this->session->userdata('user');

				$formArray = array();
				$formArray['catid']                = md5(time());
				$formArray['category']             = $this->input->post('category');
				$formArray['is_active']            = $this->input->post('is_active');
				$formArray['slug']                 = slug($this->input->post('category'));
				$formArray['created_at']           = date('Y-m-d H:i:s');

				$catid = $this->Category_model->create($formArray);

				$row = $this->Category_model->getRow($catid);
				$newData['row'] = $row;
				$rowHtml = $this->load->view('admin/categories/categories_row',$newData, true);

				$response['row'] = $rowHtml;
				$response['status'] = 1;
				$response['message'] = '<div class="text-success"><h4>Record created SuccessFully!</h4></div>';

		}else{

			$response['status'] = 0;
			$response['category'] = strip_tags(form_error('category'));
			$response['is_active'] = strip_tags(form_error('is_active'));
		}

		echo json_encode($response);
	}

	public function delete($catid)
	{	
		$this->load->model('Category_model');
		$categories = $this->Category_model->getRow($catid);

		if (empty($categories)) {
			$this->session->set_flashdata('error', 'categories is not found');
			redirect(base_url().'admin/categories');
		}


		$this->Category_model->delete($catid);
		$this->session->set_flashdata('success', 'categories deleted Successfully!');
		redirect(base_url().'admin/categories');

		$this->load->view('admin/categories/categories');

	}

	public function enable($catid)
	{	
		$data = array('is_active' => 1);
		$this->load->model('Category_model');
		$categories = $this->Category_model->getRow($catid);

		if (empty($categories)) {
			$this->session->set_flashdata('error', 'categories is not found');
			redirect(base_url().'admin/categories');
		}


		$this->Category_model->update($catid,$data);
		$this->session->set_flashdata('success', 'categories updated Successfully!');
		redirect(base_url().'admin/categories');

		$this->load->view('admin/categories/categories');

	}
	public function disable($catid)
	{	
		$data = array('is_active' => 0);
		$this->load->model('Category_model');
		$categories = $this->Category_model->getRow($catid);

		if (empty($categories)) {
			$this->session->set_flashdata('error', 'categories is not found');
			redirect(base_url().'admin/categories');
		}


		$this->Category_model->update($catid,$data);
		$this->session->set_flashdata('success', 'categories updated Successfully!');
		redirect(base_url().'admin/categories');

		$this->load->view('admin/categories/categories');

	}
}
