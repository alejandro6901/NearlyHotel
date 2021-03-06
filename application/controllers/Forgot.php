<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Forgot extends CI_Controller
{
    public function show_forgot()
    {
        $error = $this->session->flashdata('error');
        $data['error'] = $error;
        $this->load->view('Forgot/forgot.php', $data);
    }
    public function resetPassword()
    {
        $this->load->model('Forgot_model');
        $email = $this->input->post('email');
        $data['email'] = $this->Forgot_model->get_email($email);

        if ($email === '') {
            $this->session->set_flashdata('error', 'Empty Fields');
            redirect('Forgot/show_forgot');
        } else {
            if ($email == $data['email']) {
                $rest_pass = $this->Forgot_model->get_random_password();
                $this->Forgot_model->update_reset($rest_pass, $data['email']);
          // $this->load->library('email');
          // $this->email->to($this->input->post('email'));
          // $this->email->from('alejandro690101@hotmail.com', 'Nearly Hotel');
          // $this->email->subject('Reset your passwor');
          // $message="this is you new password:  ".$rest_pass;
          // $this->email->message($message);
          // if ($this->email->send()) {
          // 	//si envía el correo
          // } else {
          // 	//si no envía el correo
          // }
          redirect('Login');
            } else {
                $this->session->set_flashdata('error', 'Invalid Email');
                redirect('Forgot/show_forgot');
            }
        }
    }
}
