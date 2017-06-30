<?php
class Users extends CI_Model
{
	
	public function Save($username,$pass,$email,$fname,$lname,$phn,$add){
			$user=array(
				"username"=>$username,
				"password"=>$pass,
				"email_address"=>$email,
				"first_name"=>$fname,
				"last_name"=>$lname,
				"phone_number"=>$phn,
				"address"=>$add
			);
			return $this->db->insert("tblusers",$user);
		}

	public function Login($username,$pass)
	{
		$sql=$this->db->where(['username'=>$username,'password'=>$pass])->get('tblusers');
		if($sql->num_rows()>=1)
		{
			return $sql->row()->user_id;
			echo 'hello '.$username;
		}
		else
		{
			echo "Either Username or password is wrong. ";
		}
	}
}

?>