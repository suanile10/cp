<?php
class UserController extends CI_Controller
{
	public function login()
	{
		$this->form_validation->set_rules('txtUsername', 'txtUsername', 'required');
		$this->form_validation->set_rules('txtPassword', 'txtPassword', 'required');

		if ($this->form_validation->run() == TRUE)
		{
			$username = $_POST['txtUsername'];
			$password = $_POST['txtPassword'];

			//check user in database
			$this->db->select('*');
			$this->db->from('tblusers');
			$this->db->where(array('username'=>$username,'password'=>$password));
			$query = $this->db->get();

			$user = $query->row();

			//IF USER EXITS
 
			if ($user->email)
			{
				$this->session->set_flashdata("success", "NYou are loged in.");

				//set session variable
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				// redirect to profile page
				redirect ("UserController/profile", "refresh");
			}
			else
			{
				$this->session->set_flashdata("error", "No such user exits.");
				redirect ("UserController/login", "refresh");

			}
	  

		}

		$this->load->view('login'); 
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

				$this->db->insert('tblusers',$data);
				$this->session->set_flashdata("success","You are now registered.");
				redirect("UserController/register");
			}
		}

		//load view
		$this->load->view('register');
	}

	public function __construct()
	{
		if (isset($_SESSION['user_logged']))
		{
			$this->session->set_flashdata("error", "Please login first." );
			redirect ("UserController/login");
		}
	}

	public function profile()
	{
		$this->load->view('profile');
	}



}


?>