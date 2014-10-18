<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OAnime extends CI_Controller
{
	const VIEW_PATH = 'backOffice/anime';
	private $id;
	private $name_fr;
	private $name_en;
	private $name_jp;
	private $resume;
	private $id_url;
	private $id_rating;

	public function __construct($name_fr = '', $name_en = '', $name_jp = '', $resume = '', $id_url = '', $id_rating = '')
	{
		parent::__construct();
		$this->setNameFr($name_fr)
		->setNameEn($name_en)
		->setNameJp($name_jp)
		->setResume($resume);

	}

	/*public function setId()
	{

	}

	public function getId()
	{

	}*/

	public function setNameFr($name_fr)
	{
		$this->name_fr = (string) $name_fr;
		return $this;
	}

	public function getNameFr()
	{
		return $this->name_fr;
	}

	public function setNameEn($name_en)
	{
		$this->name_en = (string) $name_en;
		return $this;
	}

	public function getNameEn()
	{
		return $this->name_en;
	}

	public function setNameJp($name_jp)
	{
		$this->name_jp = (string) $name_jp;
		return $this;
	}

	public function getNameJp()
	{
		return $this->name_jp;
	}

	public function setResume($resume)
	{
		$this->resume = $resume;
		return $this;
	}

	public function getResume()
	{
		return $this->resume;
	}
}

?>