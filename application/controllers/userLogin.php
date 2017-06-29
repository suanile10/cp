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
			$this->form_validation->set_rules('txtPassword', 'password', 'required');
			
		}
	}
?>