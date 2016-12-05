<?php

class FirstLog_model extends CI_Model
{
   public function __construct()
   {
       parent::__construct();
   }

   public function updateFirstData($nick,$id,$id_user)
   {
       $this->db->query("UPDATE `user` SET `nickname`='$nick',`car_color`= $id WHERE $id_user");
   }
  //  public function getFirstLog($id)
  //  {
  //      $this->db->query("SELECT car_color FROM user WHERE id= $id");
  //  }

}

?>
