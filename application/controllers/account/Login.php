<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function Index()
    {
        $this->load->view('account/login', '', false);
    }

  public function authenticate()
  {
      $this->load->library('form_validation');
      $this->load->model('User_model');

      $this->load->library('user_agent');

      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == true) {
          $email = $this->input->post('email');
          $user = $this->User_model->getByEmail($email);
          // print_r($user);
          if (!empty($user)) {
              $password = $this->input->post('password');
              if (password_verify($password, $user['password']) == true) {
                  $userArray['userid'] = $user['userid'];
                  $userArray['firstname'] = $user['firstname'];
                  $userArray['lastname'] = $user['lastname'];
                  $userArray['email'] = $user['email'];
                  $userArray['phone'] = $user['phone'];
                  $userArray['role'] = $user['role'];
                  $userArray['active'] = $user['active'];
                  $this->session->set_userdata('user', $userArray);
				  
                  if ($userArray['active'] == true) {
                      if ($userArray['role'] == "admin") {
                          $formArray['userid'] = $user['userid'];
                          $formArray['ip_address'] = $this->input->ip_address();
                          $formArray['user_agent'] = $this->agent->browser();
                          $formArray['os'] = $this->agent->platform();
                          $formArray['last_activity'] = date("Y-m-d H:i:s");

                          $this->User_model->sessions($formArray);

                          redirect(base_url().'admin/dashboard');
                      } elseif ($userArray['role'] == "instructor") {
                          $formArray['userid'] = $user['userid'];
                          $formArray['ip_address'] = $this->input->ip_address();
                          $formArray['user_agent'] = $this->agent->browser();
                          $formArray['os'] = $this->agent->platform();
                          $formArray['last_activity'] = date("Y-m-d H:i:s");

                          $this->User_model->sessions($formArray);

                          redirect(base_url().'elearning/instructor/dashboard');
                      } elseif ($userArray['role'] == "student") {
                          $formArray['userid'] = $user['userid'];
                          $formArray['ip_address'] = $this->input->ip_address();
                          $formArray['user_agent'] = $this->agent->browser();
                          $formArray['os'] = $this->agent->platform();
                          $formArray['last_activity'] = date("Y-m-d H:i:s");

                          $this->User_model->sessions($formArray);

                          redirect(base_url().'elearning/student/dashboard');
                      } else {
                          $formArray['userid'] = $user['userid'];
                          $formArray['ip_address'] = $this->input->ip_address();
                          $formArray['user_agent'] = $this->agent->browser();
                          $formArray['os'] = $this->agent->platform();
                          $formArray['last_activity'] = date("Y-m-d H:i:s");

                          $this->User_model->sessions($formArray);

                          redirect(base_url().'home');
                      }
                  } else {
                      $this->session->set_flashdata('msg', 'you need to activate your account first!, sent to your mail box');
                      $this->load->view('account/login', '', false);
                  }
              } else {
                  // if password is wrong
                  $this->session->set_flashdata('msg', 'Wrong email or password');
                  $this->load->view('account/login', '', false);
              }
          } else {
              // if email is wrong
              $this->session->set_flashdata('msg', 'Wrong email or password');
              $this->load->view('account/login', '', false);
          }
      } else {
          //show errors
          $this->load->view('account/login', '', false);
      }
  }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect(base_url().'home');
    }
}
