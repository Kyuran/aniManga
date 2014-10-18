<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
	}	
	public function index()
	{
		$this->load->model('usermodel');
		//Récupérer les données saisies envoyées en POST
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('email', '"Identifiant"', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', '"Mot de passe"', 'trim|required|xss_clean');
		$result = $this->usermodel->userLogin($email, $password);
		
		if($this->form_validation->run() == false) {
			$this->layout->view('back/anime/anime', NULL, 'front_default');
		}
		elseif($this->form_validation->run() == true && empty($result)) {
			$this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
			$this->layout->view('back/anime/anime', NULL, 'front_default');
			redirect('/login');
		}
		else {
			$this->session->set_userdata('id_user', $result['email']);
			$this->layout->view('back/anime/anime', NULL, 'front_default');
			//redirect('user/accueil');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */