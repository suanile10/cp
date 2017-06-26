<?php
class User extends CI_Model
{
	public function registerUser()
	{
		$this->db->insert('tblusers',$data);
		return "User Register m";
		echo "ramf";
	}
}

?>