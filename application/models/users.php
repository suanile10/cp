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

	public function userLoginh($username,$pass)
	{
		$sql=$this->db->where(['username'=>$username,'password'=>$pass])->get('tblusers');
		if($sql->num_rows()>=1)
		{
			return $sql->row()->user_id;
			echo 'hello '.$username;
		}
		
		{
			echo "Either Username or password is wrong. ";
		}

		/*$this->db->where('username',$this->input->post('txtUsername'));

		$this->db->where('password',$this->input->post('txtPassword'));
		$query = $this->db->get('tblusers');

		if ($query->num_rows()==1)
		{
			echo "hello";
		}
		else
		{
			echo "bye";
		}*/
	}

}

?>