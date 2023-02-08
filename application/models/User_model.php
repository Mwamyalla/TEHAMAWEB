<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    /// for login
    public function getByEmail($email)
    {
        $this->db->where('email', $email);
        $admins = $this->db->get('users')->row_array();

        return $admins;
    }

    public function sessions($formArray)
    {
        $this->db->insert('ci_sessions', $formArray);
        return $id = $this->db->insert_id();
    }


    ///for registration

    public function getAllusers()
    {
        $query = $this->db->get('users')->result_array();
        return $query;
    }

    public function register($formArray)
    {
        $this->db->insert('users', $formArray);
        return $this->db->insert_id();
    }

    public function getUser($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users')->row_array();

        return $query;
    }

    public function activate($data, $id)
    {
        $this->db->where('users.id', $id);
        return $this->db->update('users', $data);
    }

    //forgetb password
        //forget password

     public function ForgotPassword($email)
     {
         $this->db->select('email');
         $this->db->from('users');
         $this->db->where('email', $email);
         $query=$this->db->get();
         return $query->row_array();
     }

    public function updatepasswordForgot($email, $formArray)
    {
        $this->db->where('email', $email);
        $this->db->update('users', $formArray);
    }
}
