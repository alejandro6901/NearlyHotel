<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ChangePersonalData extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ChangePersonalData_model");
    }
    public function show_changePersonalData()
    {
    $data['single_user'] = $this->ChangePersonalData_model->show_user_id(3);
    $this->load->view('PersonalData/personalData.php',$data);
    $pass=$this->input->post('lastName');
    echo $pass;
    }
    public function updatePersonalData()
    {
       $data = array(
       'first_name' => $this->input->post('firstName'),
       'last_name' => $this->input->post('lastName')
       //'date' => $this->->post('')
       );
       $this->ChangePersonalData_model->updatePersonalData(3,$data);
    }
}
