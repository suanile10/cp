<?php
class Users extends CI_Model
{
	public function registerUser()
	{
		$data = array(
			'' => , );

		$this->db->insert('tblusers',$data);
		return "User Register m";
		echo "ramf";
	}
}

?>