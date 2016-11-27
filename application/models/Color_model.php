<?php

class Color_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }

   public function getColor()
   {
       $query = $this->db->get('color');
       return $query->result_array();
   }

}

?>
