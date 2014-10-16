<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PAnime extends CI_Controller
{
	const VIEW_PATH = 'back/anime';

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$path_anime = self::VIEW_PATH . '/anime';
		$this->layout->view($path_anime,$data,'front_default');
	}

	public function addAnime()
	{
		$this->config->load('form_anime');
		$this->load->model('animeManager');
		$data['config_form'] = $this->config->item('form_add_anime');
		$path_anime = self::VIEW_PATH . '/add_anime';
		//example form validation

		$this->form_validation->set_rules('name_jp', 'titre japonais', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['success'] = false;
			$this->layout->view($path_anime,$data,'default');
		}
		else
		{
			$data['success'] = true;
			$this->setNameFr($this->input->post('name_fr'));
			$this->setNameEn($this->input->post('name_en'));
			$this->setNameJp($this->input->post('name_jp'));
			$this->setResume($this->input->post('resume'));

			$this->layout->view($path_anime,$data,'default');
		}
	}

	public function deleteAnime()
	{
		$path_anime = self::VIEW_PATH . '/del_anime';
		$this->layout->view($path_anime,null,'default');
	}

}

?>