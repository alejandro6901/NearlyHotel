<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FirstLog extends CI_Controller
{

    public function show_firstlog()
    {
            $error = $this->session->flashdata('error');
            $data['error'] = $error;
            $this->load->model('Color_model');
            $data['color'] =$this->Color_model->getColor();
            $this->load->view('FirstLog/firstLog',$data);
    }

    public function registerDataFirstLog()
    {
        $data = $this->load->model('FirstLog_model');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_color', 'color', 'trim|required');
        $this->form_validation->set_rules('nickname', 'Nick Name', 'trim|required');
        $this->form_validation->set_message('required','%s is required');
        if (!$this->form_validation->run())
       {
           $error = $this->session->set_flashdata('error','Empty Fields');
           redirect('FirstLog/show_firstlog',$error);

        } else {
          $data = array(
                 'nickname' => $this->input->post('nickname'),
                 'id_color' => $this->input->post('id_color')
           );
          $this->FirstLog_model->insertFirstData($data);
          redirect('EditProfile/show_editprofile');
        }
    }
}
