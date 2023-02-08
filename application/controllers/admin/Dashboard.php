<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->view('admin/dashboard');
	}
}
