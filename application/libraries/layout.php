<?php if (!defined('BASEPATH')) exit('Not direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();

	public function __construct()
	{
		$this->CI = get_instance();

		$this->var['output']  = '';
		$this->var['titre']   = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
		$this->var['charset'] = $this->CI->config->item('charset');
		$this->var['css']     = array();
		$this->var['js']      = array();

		// call the function who set the default css and js files
		$this->setDefaultLib();
	}

	/**
	 * Set the default css and js files
	 */
	public function setDefaultLib() {
		$this->addCss('main');
		$this->addCss('menu');
		$this->addCss('login');
		$this->addSpecifiedCss('bootstrap/css/bootstrap');
		$this->addJs('js/jquery');
		$this->addSpecifiedJs('bootstrap/js/bootstrap');
	}

	public function view($name, $data = array(), $theme = "default")
	{
		$this->var['output'] .= $this->CI->load->view($name, $data, true);
		$this->CI->load->library('session');

     	$sessionData = $this->CI->session->userdata('logged_in');

		$this->var['login'] = $sessionData['login'];

		$this->CI->load->view('../themes/'.$theme, $this->var);
	}

	/**
	 * Set the title of the page
	 *
	 * @param string $name
	 * @return boolean
	 */
	public function setTitle($titre)
	{
		if (is_string($titre) AND !empty($titre)) {
			$this->var['titre'] = $titre;
			return true;
		}

		return false;
	}

	public function setCharset($charset)
	{
		if (is_string($charset) AND !empty($charset)) {
			$this->var['charset'] = $charset;
			return true;
		}

		return false;
	}

	/**
	 * Add a new css file in the <head> of the page
	 *
	 * @param string $name
	 * @return boolean
	 */
	public function addCss($name)
	{
		if (is_string($name) AND !empty($name) AND file_exists('./resources/css/' . $name . '.css')) {
			$this->var['css'][] = base_url()."resources/css/" . $name . ".css";
			return true;
		}

		return false;
	}

	/**
	 * Add a specidied new css file in the <head> of the page
	 *
	 * @param string $name
	 * @return boolean
	 */
	public function addSpecifiedCss($name)
	{
		if (is_string($name) AND !empty($name) AND file_exists('./resources/' . $name . '.css')) {
			$this->var['css'][] = base_url()."resources/" . $name . ".css";
			return true;
		}

		return false;
	}

	/**
	 * Add a new js file just before the end of <body>
	 *
	 * @param string $name
	 * @return boolean
	 */
	public function addJs($name)
	{
		if (is_string($name) AND !empty($name) AND file_exists('./resources/' . $name . '.js')) {
			$this->var['js'][] = base_url()."resources/" . $name . ".js";
			return true;
		}

		return false;
	}

	/**
	 * Add a specified new js file just before the end of <body>
	 *
	 * @param string $name
	 * @return boolean
	 */
	public function addSpecifiedJs($name)
	{
		if (is_string($name) AND !empty($name) AND file_exists('./resources/' . $name . '.js')) {
			$this->var['js'][] = base_url()."resources/" . $name . ".js";
			return true;
		}

		return false;
	}
}