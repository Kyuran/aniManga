<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OUser extends CI_Controller
{
	const VIEW_PATH = 'backOffice/anime';
	private $id;
	private $login;
	private $password;
	private $lastName;
	private $firstName;
	private $age;

	public function __construct()
	{
		parent::__construct();
	}

	/*public function setId()
	{

	}

	public function getId()
	{

	}*/

	public function setLogin($login)
	{
		$this->login = $login;
		return $this;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}
	
	public function setLastName($nom)
	{
		$this->lastName = $lastName;
		return $this;
	}
	
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}
	
	public function setAge($age)
	{
		$this->age = (int) $age;
		return $this;
	}
	
	public function getLogin()
	{
		return $this->login;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getLastName()
	{
		return $this->lastName;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function getAge()
	{
		return $this->age;
	}	
	
}

?>