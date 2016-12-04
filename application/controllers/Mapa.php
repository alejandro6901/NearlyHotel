<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapa extends CI_Controller
{

    public function show_mapa()
    {
     $this->load->library("Googlemaps");
     $this->googlemaps->initialize();
     $data['map']= $this->googlemaps->create_map();
     $this->load->view('Mapa/mapa.php',$data);
    }
 
}