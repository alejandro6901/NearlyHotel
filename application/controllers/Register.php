<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function show_register()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Register/register.php',$data);
    }
    public function registerUser()
    {
        $data = $this->load->model('Register_model');
        $name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = $_POST['date'];
        if ($name === '' || $last_name === '' || $email === ''
         || $password === '' || $date === '')
       {
           $error = $this->session->set_flashdata('error','Empty Fields');
           redirect('Register/show_register');
        } else {
            $data = array(
                 'first_name' => $name,
                 'last_name' => $last_name,
                 'email' => $email,
                 'password' => $password,
                 'date' => $date,
           );
            $this->Register_model->insertUser($data);
            redirect('Login');
        }


    }
}
