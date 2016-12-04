<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function show_register()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Register/register.php', $data);
    }
    public function registerUser()
    {
        $data = $this->load->model('Register_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('date','Date','trim|required');
        $this->form_validation->set_message('required','%s is required');
        if ($this->form_validation->run()) {
                  $data = array(
                       'first_name' =>  $this->input->post('first_name'),
                       'last_name' =>  $this->input->post('last_name'),
                       'email' => $this->input->post('email'),
                       'password' => $this->input->post('password'),
                       'date' => $this->input->post('date'),

                 );
                  $this->Register_model->insertUser($data);
                  redirect('Login');


        } else {
        redirect('Register/show_register');
        }

    }
}
