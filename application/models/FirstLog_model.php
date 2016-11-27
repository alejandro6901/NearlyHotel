<?php

class FirstLog_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }

   public function insertFirstData($data)
   {
       $this->db->insert('first_login',$data);
   }

}

?>
