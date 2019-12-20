<?php

class User_model extends CI_Model 
{
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('admin');

        if($result = $query->num_rows() == 1)
        {
            return $result->row(0);
        }
        else
        {
            return FALSE;
        }
    }

    public function __construct() 
    {
        $this->load->database();
    }

    public function get_users() 
    {   
        $query = $this->db->get('users');
        return $query->result_array(); 
    }

    public function create_user()
    {
        $data = array('username' => $this->input->post('username'));
        return $this->db->insert('users',$data);

    }


}