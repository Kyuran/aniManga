<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class UploadVideo extends CI_Controller
{
	private $valid_extensions = array('avi','wmv');
	private $name;
	private $extension;
	private $type;
	private $tmp_name;
	private $error = 0;
	private $size;
	private $maxSize = 200000000;

	public function __construct($infos = array())
	{
		var_dump($infos);
		$this->setName($infos['file']['name'])
		->setExtension() // Retrieved with the name file
		->setType($infos['file']['type'])
		->setTmpName($infos['file']['tmp_name'])
		->setError($infos['file']['error'])
		->setSize($infos['file']['size']);

		var_dump($this->getExtension());
	}

	public function isValid()
	{
		$error = true;
		if($this->getError() > 0) { $error = false; }
		if($this->getSize() > $this->maxSize) { $error = false; }

		return $error;
	}

	public function setName($name)
	{
		$this->name = (string) $name;
		return $this;
	}

	public function setExtension()
	{
		$pos = strrpos($this->getName(), '.', -1);
		$this->extension = substr($this->getName(), $pos + 1); // + 1 to suppr the point
		return $this;
	}

	public function setType($type)
	{
		$this->type = (string) $type;
		return $this;
	}

	public function setTmpName($tmp_name)
	{
		$this->tmp_name = (string) $tmp_name;
		return $this;
	}

	public function setError($error)
	{
		$this->error = (int) $error;
		return $this;
	}

	public function setSize($size)
	{
		$this->size = (int) $size;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getExtension()
	{
		return $this->extension;
	}

	public function getType()
	{
		return $this->type;
	}

	public function getTmpName()
	{
		return $this->tmp_name;
	}

	public function getError()
	{
		return $this->error;
	}

	public function getSize()
	{
		return $this->size;
	}
}