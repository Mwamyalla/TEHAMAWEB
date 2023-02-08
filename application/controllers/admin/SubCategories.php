<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategories extends CI_Controller {

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
		
		$this->load->model("SubCategory_model");
		$subcategories = $this->SubCategory_model->getSubCategories();
		$data['subcategories'] = $subcategories;

		$this->load->model("Category_model");
		$categories = $this->Category_model->getCategories();
		$data['categories'] = $categories;
		$this->load->view('admin/subcategories/subcategories',$data);
	}

	public function saveSubCategory()
	{	
		


		$this->load->model("SubCategory_model");
		$this->load->helper("common_helper");
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('subcategory','Sub Category name','trim|required');
		$this->form_validation->set_rules('parentid','Category name','trim|required');
		$this->form_validation->set_rules('is_active','is_active name','trim|required');

		if($this->form_validation->run() == true)
		{	
			
				$user = $this->session->userdata('user');

				$formArray = array();
				$formArray['subcatid']             = md5(time());
				$formArray['subcategory']          = $this->input->post('subcategory');
				$formArray['parentid']             = $this->input->post('parentid');
				$formArray['is_active']            = $this->input->post('is_active');
				$formArray['slug']                 = slug($this->input->post('subcategory'));
				$formArray['created_at']           = date('Y-m-d H:i:s');

				$this->SubCategory_model->create($formArray);


			
				$this->session->set_flashdata('msg', 'subcategories created Successfully');
				redirect(base_url().'admin/subcategories');
		}else{

			$response['status'] = 0;
			$response['subcategory'] = strip_tags(form_error('subcategory'));
			$response['is_active'] = strip_tags(form_error('is_active'));
			$this->load->view('admin/subcategories/subcategories');
		}


	}

	public function delete($subcatid)
	{	
		$this->load->model('SubCategory_model');
		$subcategories = $this->SubCategory_model->getRow($subcatid);

		if (empty($subcategories)) {
			$this->session->set_flashdata('error', 'subcategories is not found');
			redirect(base_url().'admin/subcategories');
		}


		$this->SubCategory_model->delete($subcatid);
		$this->session->set_flashdata('success', 'subcategories deleted Successfully!');
		redirect(base_url().'admin/subcategories');

		$this->load->view('admin/subcategories/subcategories');

	}

	public function enable($subcatid)
	{	
		$data = array('is_active' => 1);
		$this->load->model('SubCategory_model');
		$subcategories = $this->SubCategory_model->getRow($subcatid);

		if (empty($subcategories)) {
			$this->session->set_flashdata('error', 'subcategories is not found');
			redirect(base_url().'admin/subcategories');
		}


		$this->SubCategory_model->update($subcatid,$data);
		$this->session->set_flashdata('success', 'subcategories updated Successfully!');
		redirect(base_url().'admin/subcategories');

		$this->load->view('admin/subcategories/subcategories');

	}
	public function disable($subcatid)
	{	
		$data = array('is_active' => 0);
		$this->load->model('SubCategory_model');
		$subcategories = $this->SubCategory_model->getRow($subcatid);

		if (empty($subcategories)) {
			$this->session->set_flashdata('error', 'subcategories is not found');
			redirect(base_url().'admin/subcategories');
		}


		$this->SubCategory_model->update($subcatid,$data);
		$this->session->set_flashdata('success', 'subcategories updated Successfully!');
		redirect(base_url().'admin/subcategories');

		$this->load->view('admin/subcategories/subcategories');

	}
}
