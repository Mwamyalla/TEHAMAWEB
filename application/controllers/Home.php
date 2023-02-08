<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');

		if (empty($user)) {
			$this->session->set_flashdata('msg', 'Your session has been expired !');
		}
	}
	public function Index()
	{	
		$user = $this->session->userdata('user');
		$data['user'] = $user;
		$this->load->view('front/home',$data);
	}
}
