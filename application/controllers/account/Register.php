<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

        //get all users
        $data['users'] = $this->User_model->getAllusers();
    }

    public function index()
    {
        $this->load->view('account/register', '', false);
    }
    public function register()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[30]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');
        $data['users'] = $this->User_model->getAllusers();

        if ($this->form_validation->run() == true) {
            //get user inputs
            $firstname = $this->input->post('firstname');
            $lastname = $this->input->post('lastname');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $role = $this->input->post('role');
            $password = $this->input->post('password');


            //generate simple random code
            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($set), 0, 12);

            //insert user to users table and get id
            $formArray['userid'] = md5(time());
            $formArray['firstname'] = $firstname;
            $formArray['lastname'] = $lastname;
            $formArray['email'] = $email;
            $formArray['phone'] = $phone;
            $formArray['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $formArray['role'] = $role;
            $formArray['code'] = $code;
            $formArray['active'] = false;
            $formArray['created_at'] = date("Y-m-d H:i:s");
            ;
            $id = $this->User_model->register($formArray);


            //set up email
            $config = array(
                'protocol' => 'mail',
                'smtp_host' => 'mail.tehamaspace.org',
                'smtp_port' => 465,
                'smtp_user' => 'tehama@tehamaspace.org', // change it to yours
                'smtp_pass' => 'orgTspace12', // change it to yours
                'mailtype' => 'html',
                'wordwrap' => true
            );

            //set up email
            $config = array(
                'protocol' => 'mail',
                'smtp_host' => 'mail.tehamaspace.org',
                'smtp_port' => 465,
                'smtp_user' => 'tehama@tehamaspace.org', // change it to yours
                'smtp_pass' => 'orgTspace12', // change it to yours
                'mailtype' => 'html',
                'wordwrap' => true,
            );

            $this->email->initialize($config);
            $this->load->library('email');
            $this->email->set_newline("\r\n");



            $message = "
                <!DOCTYPE html>
                    <html data-editor-version='2' class='sg-campaigns' >
                    
                    <head>
                      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
                      <meta name='viewport' content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1'>
                      <meta http-equiv='X-UA-Compatible' content='IE=Edge'>
                      <style type='text/css'>
                        body,
                        p,
                        div {
                          font-family: inherit;
                          font-size: 14px;
                        }
                    
                        body {
                          color: #000000;
                        }
                    
                        A body a {
                          color: #1188E6;
                          text-decoration: none;
                        }
                    
                        p {
                          margin: 0;
                          padding: 0;
                        }
                    
                        table.wrapper {
                          width: 100% !important;
                          table-layout: fixed;
                          -webkit-font-smoothing: antialiased;
                          -webkit-text-size-adjust: 100%;
                          -moz-text-size-adjust: 100%;
                          -ms-text-size-adjust: 100%;
                        }
                    
                        img.max-width {
                          max-width: 100% !important;
                        }
                    
                        .column.of-2 {
                          width: 50%;
                        }
                    
                        .column.of-3 {
                          width: 33.333%;
                        }
                    
                        .column.of-4 {
                          width: 25%;
                        }
                    
                        @media screen and (max-width:480px) {
                    
                          .preheader .rightColumnContent,
                          .footer .rightColumnContent {
                            text-align: left !important;
                          }
                    
                          .preheader .rightColumnContent div,
                          .preheader .rightColumnContent span,
                          .footer .rightColumnContent div,
                          .footer .rightColumnContent span {
                            text-align: left !important;
                          }
                    
                          .preheader .rightColumnContent,
                          .preheader .leftColumnContent {
                            font-size: 80% !important;
                            padding: 5px 0;
                          }
                    
                          table.wrapper-mobile {
                            width: 100% !important;
                            table-layout: fixed;
                          }
                    
                          img.max-width {
                            height: auto !important;
                            max-width: 100% !important;
                          }
                    
                          a.bulletproof-button {
                            display: block !important;
                            width: auto !important;
                            font-size: 80%;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                    
                          .columns {
                            width: 100% !important;
                          }
                    
                          .column {
                            display: block !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                            margin-left: 0 !important;
                            margin-right: 0 !important;
                          }
                        }
                      </style>
                      <link href='https://fonts.googleapis.com/css?family=Muli&display=swap' rel='stylesheet'>
                      <style>
                        body {
                          font-family: 'Muli', sans-serif;
                        }
                      </style>
                    </head>
                    
                        <body>
                          <center class='wrapper' data-link-color='#1188E6' data-body-style='font-size:14px; font-family:inherit; color:#000000; background-color:#FFFFFF;'>
                            <div class='webkit'>
                              <table cellpadding='0' cellspacing='0' border='0' width='100%' class='wrapper' bgcolor='#FFFFFF'>
                                <tbody><tr>
                                  <td valign='top' bgcolor='#FFFFFF' width='100%'>
                                    <table width='100%' role='content-container' class='outer' align='center' cellpadding='0' cellspacing='0' border='0'>
                                      <tbody><tr>
                                        <td width='100%'>
                                          <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                            <tbody><tr>
                                              <td>
                    
                                                        <table width='100%' cellpadding='0' cellspacing='0' border='0' style='width:100%; max-width:600px;' align='center'>
                                                          <tbody><tr>
                                                            <td role='modules-container' style='padding:0px 0px 0px 0px; color:#000000; text-align:left;' bgcolor='#FFFFFF' width='100%' align='left'><table class='module preheader preheader-hide' role='module' data-type='preheader' border='0' cellpadding='0' cellspacing='0' width='100%' style='display: none !important; mso-hide: all; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;'>
                        <tbody><tr>
                          <td role='module-content'>
                            <p></p>
                          </td>
                        </tr>
                      </tbody></table>
                      <table border='0' cellpadding='0' cellspacing='0' align='center' width='100%' role='module' data-type='columns' style='padding:30px 20px 30px 20px;' bgcolor='#f6f6f6'>
                        <tbody>
                          <tr role='module-content'>
                            <td height='100%' valign='top'>
                              <table class='column' width='540' style='width:540px; border-spacing:0; border-collapse:collapse; margin:0px 10px 0px 10px;' cellpadding='0' cellspacing='0' align='left' border='0' bgcolor=''>
                                <tbody>
                                  <tr>
                                    <td style='padding:0px;margin:0px;border-spacing:0;'>
                    
                      <table class='module' role='module' data-type='spacer' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='331cde94-eb45-45dc-8852-b7dbeb9101d7'>
                        <tbody>
                          <tr>
                            <td style='padding:0px 0px 20px 0px;' role='module-content' bgcolor=''>
                            </td>
                          </tr>
                        </tbody>
                      </table><table class='wrapper' role='module' data-type='image' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='d8508015-a2cb-488c-9877-d46adf313282'>
                        <tbody>
                          <tr>
                            <td style='font-size:6px; line-height:10px; padding:0px 0px 0px 0px;' valign='top' align='center'>
                              <img class='max-width' border='0' style='display:block; color:#000000; text-decoration:none; font-family:Helvetica, arial, sans-serif; font-size:16px;' width='170' alt='' data-proportionally-constrained='true' data-responsive='false' src='https://tehamaspace.org/assets/front/images/newlogo.png' height='50'>
                            </td>
                          </tr>
                        </tbody>
                      </table><table class='module' role='module' data-type='spacer' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='27716fe9-ee64-4a64-94f9-a4f28bc172a0'>
                        <tbody>
                          <tr>
                            <td style='padding:0px 0px 30px 0px;' role='module-content' bgcolor=''>
                            </td>
                          </tr>
                        </tbody>
                      </table><table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='948e3f3f-5214-4721-a90e-625a47b1c957' data-mc-module-version='2019-10-22'>
                        <tbody>
                          <tr>
                            <td style='padding:50px 30px 18px 30px; line-height:36px; text-align:inherit; background-color:#ffffff;' height='100%' valign='top' bgcolor='#ffffff' role='module-content'><div><div style='font-family: inherit; text-align: center'><span style='font-size: 30px'>
                            <h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Password: ".$password."</p>
							<p>Please click the link below to activate your account.</p>
                            &nbsp;</span></div><div></div></div></td>
                          </tr>
                        </tbody>
                      </table><table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='a10dcb57-ad22-4f4d-b765-1d427dfddb4e' data-mc-module-version='2019-10-22'>
                        <tbody>
                          <tr>
                            <td style='padding:18px 30px 18px 30px; line-height:22px; text-align:inherit; background-color:#ffffff;' height='100%' valign='top' bgcolor='#ffffff' role='module-content'><div><div style='font-family: inherit; text-align: center'><span style='font-size: 18px'>Please verify your email address to</span><span style='color: #000000; font-size: 18px; font-family: arial,helvetica,sans-serif'> get access to thousands of courses</span><span style='font-size: 18px'>.</span></div>
                    <div style='font-family: inherit; text-align: center'><span style='color: #ffbe00; font-size: 18px'><strong>Thank you!&nbsp;</strong></span></div><div></div></div></td>
                          </tr>
                        </tbody>
                      </table><table class='module' role='module' data-type='spacer' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='7770fdab-634a-4f62-a277-1c66b2646d8d'>
                        <tbody>
                          <tr>
                            <td style='padding:0px 0px 20px 0px;' role='module-content' bgcolor='#ffffff'>
                            </td>
                          </tr>
                        </tbody>
                      </table><table border='0' cellpadding='0' cellspacing='0' class='module' data-role='module-button' data-type='button' role='module' style='table-layout:fixed;' width='100%' data-muid='d050540f-4672-4f31-80d9-b395dc08abe1'>
                          <tbody>
                            <tr>
                              <td align='center' bgcolor='#ffffff' class='outer-td' style='padding:0px 0px 0px 0px;'>
                                <table border='0' cellpadding='0' cellspacing='0' class='wrapper-mobile' style='text-align:center;'>
                                  <tbody>
                                    <tr>
                                    <td align='center' bgcolor='#ffbe00' class='inner-td' style='border-radius:6px; font-size:16px; text-align:center; background-color:inherit;'>
                                      <a href='".base_url()."account/register/activate/".$id."/".$code."' style='background-color:#ffbe00; border:1px solid #ffbe00; border-color:#ffbe00; border-radius:0px; border-width:1px; color:#000000; display:inline-block; font-size:14px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:12px 40px 12px 40px; text-align:center; text-decoration:none; border-style:solid; font-family:inherit;' target='_blank'>Verify Email Now</a>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class='module' role='module' data-type='spacer' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='7770fdab-634a-4f62-a277-1c66b2646d8d.1'>
                        <tbody>
                          <tr>
                            <td style='padding:0px 0px 50px 0px;' role='module-content' bgcolor='#ffffff'>
                            </td>
                          </tr>
                        </tbody>
                      </table><table class='module' role='module' data-type='text' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='a265ebb9-ab9c-43e8-9009-54d6151b1600' data-mc-module-version='2019-10-22'>
                        <tbody>
                          <tr>
                            <td style='padding:50px 30px 50px 30px; line-height:22px; text-align:inherit; background-color:#6e6e6e;' height='100%' valign='top' bgcolor='#6e6e6e' role='module-content'><div>
                             <!-- <div style='font-family: inherit; text-align: center'><span style='color: #ffffff; font-size: 18px'><strong>Here’s what happens next:</strong></span></div>
                    <div style='font-family: inherit; text-align: center'><br></div>-->
                    <!-- <div style='font-family: inherit; text-align: center'><span style='color: #ffffff; font-size: 18px'>1. Upload your resume &nbsp;and we'll keep it on file for every job submission.</span></div> -->
                    </div>
                    </td>
                          </tr>
                        </tbody>
                      </table>
                      <table border='0' cellpadding='0' cellspacing='0' class='module' data-role='module-button' data-type='button' role='module' style='table-layout:fixed;' width='100%' data-muid='d050540f-4672-4f31-80d9-b395dc08abe1.1'>
                          <tbody>
                            <tr>
                              <td align='center' bgcolor='#6e6e6e' class='outer-td' style='padding:0px 0px 0px 0px;'>
                                <table border='0' cellpadding='0' cellspacing='0' class='wrapper-mobile' style='text-align:center;'>
                                  <tbody>
                                    <tr>
                                    <td align='center' bgcolor='#ffbe00' class='inner-td' style='border-radius:6px; font-size:16px; text-align:center; background-color:inherit;'>
                                      <a href='' style='background-color:#ffbe00; border:1px solid #ffbe00; border-color:#ffbe00; border-radius:0px; border-width:1px; color:#000000; display:inline-block; font-size:14px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:12px 40px 12px 40px; text-align:center; text-decoration:none; border-style:solid; font-family:inherit;' target='_blank'>Contact Support</a>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class='module' role='module' data-type='spacer' border='0' cellpadding='0' cellspacing='0' width='100%' style='table-layout: fixed;' data-muid='c37cc5b7-79f4-4ac8-b825-9645974c984e'>
                        <tbody>
                          <tr>
                            <td style='padding:0px 0px 30px 0px;' role='module-content' bgcolor='6E6E6E'>
                            </td>
                          </tr>
                        </tbody>
                      </table></td>
                                  </tr>
                                </tbody>
                              </table>
                              
                            </td>
                          </tr>
                        </tbody>
                      </table>
                                                          <div data-role='module-unsubscribe' class='module' role='module' data-type='unsubscribe' style='color:#444444; font-size:12px; line-height:20px; padding:16px 16px 16px 16px; text-align:Center;' data-muid='4e838cf3-9892-4a6d-94d6-170e474d21e5'>
                                                            <div class='Unsubscribe--addressLine'><p class='Unsubscribe--senderName' style='font-size:12px; line-height:20px;'>Tehama spase Academy</p><p style='font-size:12px; line-height:20px;'><span class='Unsubscribe--senderAddress'>tehama@tehamasp.org</span>, <span class='Unsubscribe--senderCity'>Dar es salaam</span>,<span class='Unsubscribe--senderZip'>Tanzania</span></p></div>
                                                            <p style='font-size:12px; line-height:20px;'><a class='Unsubscribe--unsubscribeLink' href='{{{unsubscribe}}}' target='_blank' style=''>Unsubscribe</a> - <a href='{{{unsubscribe_preferences}}}' target='_blank' class='Unsubscribe--unsubscribePreferences' style=''>Unsubscribe Preferences</a></p>
                                                          </div>
                                                          <table border='0' cellpadding='0' cellspacing='0' class='module'
                                                            data-role='module-button' data-type='button' role='module'
                                                            style='table-layout:fixed;' width='100%'
                                                            data-muid='550f60a9-c478-496c-b705-077cf7b1ba9a'>
                                                            <tbody>
                                                              <tr>
                                                                <td align='center' bgcolor='' class='outer-td'
                                                                  style='padding:0px 0px 20px 0px;'>
                                                                   <table border='0' cellpadding='0' cellspacing='0' class='module' data-role='module-button' data-type='button' role='module' style='table-layout:fixed;' width='100%' data-muid='550f60a9-c478-496c-b705-077cf7b1ba9a'>
                                                                    <tbody>
                                                                      <tr>
                                                                        <td align='center' bgcolor='' class='outer-td' style='padding:0px 0px 20px 0px;'>
                                                                          <table border='0' cellpadding='0' cellspacing='0' class='wrapper-mobile' style='text-align:center;'>
                                                                            <tbody>
                                                                              <tr>
                                                                              <td align='center' bgcolor='#f5f8fd' class='inner-td' style='border-radius:6px; font-size:16px; text-align:center; background-color:inherit;'><a href='tehamaspace.org' style='background-color:#f5f8fd; border:1px solid #f5f8fd; border-color:#f5f8fd; border-radius:25px; border-width:1px; color:#a8b9d5; display:inline-block; font-size:10px; font-weight:normal; letter-spacing:0px; line-height:normal; padding:5px 18px 5px 18px; text-align:center; text-decoration:none; border-style:solid; font-family:helvetica,sans-serif;' target='_blank'>♥ Tehama spase Academy</a></td>
                                                                              </tr>
                                                                            </tbody>
                                                                          </table>
                                                                        </td>
                                                                      </tr>
                                                                    </tbody>
                                                                  </table>
                                                                </td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </center>
                    
                    
                    </body>
                    
                    </html>
            ";

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($config['smtp_user']);
            $this->email->to($email);
            $this->email->subject('Signup Verification Email');
            $this->email->message($message);

            if ($this->email->send()) {
                $this->session->set_flashdata('msg', 'Activation code sent to email');
            } else {
                $this->session->set_flashdata('msg', $this->email->print_debugger());
            }

            redirect(base_url('account/register'));
        } else {
            $this->load->view('account/register', $data);
        }
    }

    public function activate($id, $code)
    {
        // 		$id =  $this->uri->segment(3);
        // 		$code = $this->uri->segment(4);


        //fetch user details
        $user = $this->User_model->getUser($id);

        //if code matches

        if ($user['code'] == $code) {
            //update user active status
            $data['active'] = true;
            $query = $this->User_model->activate($data, $id);

            if ($query) {
                $this->session->set_flashdata('msg', 'Your is activated successfully');
            } else {
                $this->session->set_flashdata('msg', 'Something went wrong in activating account');
                redirect(base_url('account/register'));
            }
        } else {
            $this->session->set_flashdata('msg', 'Cannot activate account. Code didnt match');
            redirect(base_url('account/register'));
        }

        $this->load->view('account/register');
    }
}
