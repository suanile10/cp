<?php 
class Register extends CI_Controller
{
	public function index()
	{
		$this->load->view('registerUserForm.php');
	
	}

	public function userRegister(){
		$username=$this->input->POST("txtUsername");
		$pass=$this->input->POST("txtPassword");
		$email=$this->input->POST("txtEmail");
		$fname=$this->input->POST("txtFirstName");
		$lname=$this->input->POST("txtLastName");
		$phn=$this->input->POST("txtPhoneNumber");
		$add=$this->input->POST("txtAddress");

		$this->load->model("users"); 
		$Save=$this->users->Save($username,$pass,$email,$fname,$lname,$phn,$add);   
		
		if($Save){
			echo 'User register successfully.';
		}
		else{
			echo 'Sorry.Try again.';
		}
	}

	public function userLogin()
		{
			$username=$this->input->POST("txtUsername");
			$pass=$this->input->POST("txtPassword");
			
			$this->load->model("users");
			$Login=$this->users->userLoginh($username,$pass);
			if($Login)
			{
				echo "login";
			}
			else
			{
				echo " not login";
			}
		}
}
	
 ?>