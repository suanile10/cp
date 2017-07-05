<?PHP
	
	class UserLogin extends CI_Controller
	{
		public function index()
		{
			$this->loginUser();
		}
		public function loginUser()
		{
			$this->load->view('login');
		}
		public function loginValidation()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('txtUsername', 'username', 'required');
			$this->form_validation->set_rules('txtPassword', 'password', 'required|md5');
			
			if ($this->form_validation->run())
			{
				echo "ran";
			}
			else
			{
				$this->load->view('login');
			}
		}

		public function Login(){
		$username=$this->input->POST("txtUsername");
		$pass=$this->input->POST("txtPassword");
		
		$this->load->model("users");
		$Login=$this->users->Login($username,$pass);
		if($Login){
				 	echo "login";
		}
		else{

			echo " not login";
		}
	}
	}
?>