<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $session = $this->session->flashdata('login');
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        if ($session == null) {
            $this->load->view('Login/login',$data);
        } else {
            redirect('FirstLog/show_firstlog');
        }
    }
    public function logout()
    {
        $this->session->set_userdata('user', null);
        redirect('Login');
    }
    public function authenticate()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run()) {
            $this->load->model('Login_model');
            $result = $this->Login_model->getUser($email, $pass);

            if (sizeof($result) > 0) {
                foreach ($result as $key) {
                    $id = $key['id'];
                    $first = $key['first_log'];
                }
                if ($first === '0') {
                    $this->Login_model->updateFirstLog($id);
                    $this->session->set_userdata('user', $result[0]);
                    $session = $this->session->set_flashdata('login', true);
                    redirect('Login');
                } else if ($first === '1') {
                    $this->session->set_userdata('user', $result[0]);
                    $session = $this->session->set_flashdata('login', true);
                    redirect('EditProfile/show_editprofile');
                }
            } else {
                $error = $this->session->set_flashdata('error', 'Username and Password are incorrect');
                redirect('Login');
            }
        } else {
          $error = $this->session->set_flashdata('error', 'Empty Fields');
          $data['error'] = $error;
          redirect('Login',$data['error']);

        }

    }
}
