 <?php

class Login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function updateFirstLog($id)
    {

       $query ="UPDATE user SET first_log = 1 WHERE id = '$id'";
       $res = $this->db->query($query);
       return $res;

    }
    public function getUser($email,$pass)
    {
       $query = $this->db->get_where('user',array('email' =>$email,'password' => $pass));
       return $query->result_array();
    }


}

?>
