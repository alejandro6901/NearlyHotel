<?php

class Delete_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }
    function deleteaccount($id){
      $this->db->where('id', $id);
      $this->db->delete('user');
    }
}
?>
