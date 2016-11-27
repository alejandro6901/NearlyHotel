<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    // public function show_login()
    // {
    // $error = $this->session->flashdata('error');
    // $data['error'] = $error;
    // $this->load->view('Login/login.php',$data);
    // }
    //
    // function loginUser()
    // {
    //    $this->load->model('Login_model');
    //    $email = $_POST['email'];
    //    $pass = $_POST['password'];
    //    $data['user'] =$this->Login_model->getUsers();
    //
    //    foreach ($data['user'] as $users) {
    //         if ($users['email'] == $email &&  $users['password'] == $pass) {
    //           redirect('FirstLog/show_firstlog');
    //         }else{
    //           $error = $this->session->set_flashdata('error','Email or Password are incorrects');
    //           redirect('Login/show_login');
    //         }
    //    }
    //
    //
    // }
    public function index()
    {
        $session = $this->session->flashdata('login');
        if ($session == null) {

            $this->load->view('Login/login');
        } else {

        redirect('FirstLog/show_firstlog');
        }
    }
    public function logout()
    {
        $this->session->set_userdata('user', null);
        redirect('Login/');
    }
    public function authenticate()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $this->load->model('Login_model');
        $result = $this->Login_model->getUser($email, $pass);

        if (sizeof($result) > 0) {
            $this->session->set_userdata('user', $result[0]);
            $session = $this->session->set_flashdata('login', true);
            redirect('/Login');


        } else {
            $error = $this->session->set_flashdata('error', 'userName and Password are incorrect');
            $data['error'] = $error;
            $this->load->view('Login/login', $data);
        }
    }

}
