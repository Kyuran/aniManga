<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PAnime extends CI_Controller
{
	const VIEW_PATH = 'back/anime';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('animemodel');
	}

	public function index()
	{
		$path_anime = self::VIEW_PATH . '/anime';
		$this->layout->view($path_anime,NULL,'front_default');
	}
	/*
	 * Display content video for animes
	 */
	public function contentVideoPage($idUrl)
	{
		$this->load->model('urlmodel');
		$result = $this->urlmodel->getUrlByIdUrl($idUrl);
		$data['content_video'] = $result;
		$this->layout->view('front/content_episode', $data, 'front_default');
	}


	/**
	 * Display all infos for one anime on the front pages
	 */
	public function animePageInfos($idAnime)
	{
		$this->load->model('episodemodel');
		$this->load->model('urlmodel');
		
		$result_anime = $this->animemodel->getInfosAnimeById($idAnime);
		$result_episodes = $this->episodemodel->getEpisodesByIdAnime($idAnime);
		$result_urls = $this->urlmodel->getUrlsByIdAnime($idAnime);

		$data['infos_anime'] = $result_anime;
		$data['infos_episodes'] = $result_episodes;
		$data['infos_urls'] = $result_urls;
		$this->layout->view('front/form_anime',$data,'front_default');
	}

	public function addAnime()
	{
		$this->config->load('form_anime');
		$this->load->model('animeManager');
		$data['config_form'] = $this->config->item('form_add_anime');
		$path_anime = self::VIEW_PATH . '/anime';
		//example form validation

		$this->form_validation->set_rules('name_jp', 'titre japonais', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['success'] = false;
			$this->layout->view($path_anime,$data,'back_default');
		}
		else
		{
			$data['success'] = true;
			$this->setNameFr($this->input->post('name_fr'));
			$this->setNameEn($this->input->post('name_en'));
			$this->setNameJp($this->input->post('name_jp'));
			$this->setResume($this->input->post('resume'));

			$this->layout->view($path_anime,$data,'back_default');
		}
	}

	public function deleteAnime()
	{
		$path_anime = self::VIEW_PATH . '/del_anime';
		$this->layout->view($path_anime,null,'default');
	}

}

?>