<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class UploadVideoManager extends CI_Models
{
	const MAIN_DIRECTORY = 'videos';
	private $directory = "test";
	
	public function __construct()
	{

	}

	public function upload(Upload $upload)
	{
		if($upload->isValid()) {
			if(file_exists($upload->getDirectory())) {
				mkdir(self::MAIN_DIRECTORY . DIRECTORY_SEPARATOR . $upload->getDirectory(), 0777, true);
			}
			$name = self::MAIN_DIRECTORY . DIRECTORY_SEPARATOR . $upload->getDirectory() . DIRECTORY_SEPARATOR . $upload->getName();
			if(!file_exists($name)) {
				var_dump($name);
				$resultat = move_uploaded_file($upload->getTmpName(),$name);
				var_dump($resultat);
				if ($resultat) echo "Successful transfert";
			}
		}
		else {
			echo "Error! transfert failed.";
		}
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