<?php 
class RegisterUser extends CI_Controller
{
	public function redirectRegister()
	{
		$this->load->view('registerUserForm');
	
	}

	public function register()
	{
		if (isset($_POST['btnRegister']))
		{
			$this->form_validation->set_rules('txtUsername', 'Username', 'required');
			$this->form_validation->set_rules('txtPassword', 'Password', 'required');
			$this->form_validation->set_rules('txtConfPassword', 'Confirm Password', 'required|matches[txtPassword]');
			$this->form_validation->set_rules('txtEmail', 'Email', 'required');
			$this->form_validation->set_rules('txtFirstName', 'First Name', 'required');
			$this->form_validation->set_rules('txtLastName', 'Last Name', 'required');
			$this->form_validation->set_rules('txtPhoneNumber', 'Phone Number', 'required');
			$this->form_validation->set_rules('txtAddress', 'Address', 'required');


			// if form validation true 
			if ($this->form_validation->run()==TRUE)
			{
				echo 'form calidated';
				//add user in database

				$data = array (
						'username' => $_POST['txtUsername'],
						'password' => $_POST['txtPassword'],
						'email_address' => $_POST['txtEmail'],
						'first_name' => $_POST['txtFirstName'],
						'last_name' => $_POST['txtLastName'],
						'phone_number' => $_POST['txtPhoneNumber'],
						'address' => $_POST['txtAddress']

					);

				//$this->db->insert('tblusers',$data);
				//$this->session->set_flashdata("success","You are now registered.");
				//redirect("UserController/register");

				$this->load->model('user');
				$this->user->registerUser($data);

				//load view
		//$this->load->view('register');
			}

		}

		//load view/$this->load->view('register');
	}
	
} ?>