<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapa extends CI_Controller
{

    public function show_mapa()
    {
     $this->load->library("Googlemaps");
     $config = array();
     $config['center'] = 'Universidad Técnica Nacional, San Carlos, Quesada';
      $config['zoom'] = 10;
     $this->googlemaps->initialize($config);
     $data['map']= $this->googlemaps->create_map();
     $this->load->view('Mapa/mapa',$data);
    }

}
