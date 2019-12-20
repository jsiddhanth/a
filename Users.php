<?php

class Users extends CI_Controller 
{
        public function index()
        {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run() === FALSE)
            {

                $this->load->view('users/login');

            }
                $logged_in = $this->user_model->login();

                if($logged_in)
                {
                    $this->load->view('users/view');
                }
                else
                {
                    $this->load->view('users/login');
                }
        }

        public function view() 
        {
            $data['users'] = $this->user_model->get_users();
            $this->load->view('users/view',$data);
        }

        public function insert()
        {
            if($this->user_model->create_user())
            {
                $output = array('username' => $_POST['username']);
                  
                echo json_encode($output);
            }
        }
}