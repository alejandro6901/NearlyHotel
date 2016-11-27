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
        $id_color = $this->input->post('id_color');
        $nickname = $this->input->post('nickname');

        if ($id_color === '' || $nickname === '')
       {
           $error = $this->session->set_flashdata('error','Empty Fields');
           redirect('FirstLog/show_firstlog');

        } else {
          $data = array(
                 'nickname' => $nickname,
                 'id_color' => $id_color
           );
          $this->FirstLog_model->insertFirstData($data);
          redirect('EditProfile/show_editprofile');
        }





    }
}
