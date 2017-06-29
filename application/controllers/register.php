<?php 
class Register extends CI_Controller
{
	public function index()
	{
		$this->registerUser();
	
	}

	public function registerUser()
	{
		$this->load->view('registerUserForm');
		
	}
}
	
 ?>