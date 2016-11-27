<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Forgot extends CI_Controller
{

    public function show_forgot()
    {
    $this->load->view('Forgot/forgot.php');
    }
}
