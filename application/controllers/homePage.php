<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage extends CI_Controller
{
	const HOMEPAGE_VIEW = 'frontEnd';
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$homePageUrl = self::HOMEPAGE_VIEW . '/homePage';
		$this->layout->view($homePageUrl,null,'default');
	}
}