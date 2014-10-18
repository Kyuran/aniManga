<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
	private $id;
	private $login;
	private $password;
	private $nom;
	private $prenom;
	private $age;
	private $user;

	public function __construct()
	{
		parent::__construct();
		//$this->user = $user;
	}
	
	public function allUrlsFromOneEpisode()
	{
		$query = 	"SELECT id, full_content_vostfr
					FROM animes_urls
					WHERE id_episode = ? ";
					
		$prep = $this->db->conn_id->prepare($query);

		$prep->bindValue(1, 1, PDO::PARAM_INT);
		$prep->execute();

		$result = $prep->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}
	
	public function userLogin($email,$password) {
		$query = 	"SELECT email, password
					FROM clients
					WHERE email = ?
					AND password = ? ";
			
		$prep = $this->db->conn_id->prepare($query);
		
		$prep->bindValue(1, $email, PDO::PARAM_STR);
		$prep->bindValue(2, sha1($password), PDO::PARAM_STR);
		$prep->execute();

		$result = $prep->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}

	public function insertClient()
	{
		$query = 	"INSERT INTO clients(login,password,nom,prenom,age)
					VALUES(?,?,?,?,?)";

		$prep = $this->db->conn_id->prepare($query);
		 
		//Associer des valeurs aux place holders
		$prep->bindValue(1, $this->user->getLogin(), PDO::PARAM_STR);
		$prep->bindValue(2, sha1($this->user->getPassword()), PDO::PARAM_STR);
		$prep->bindValue(3, $this->user->getLastName(), PDO::PARAM_STR);
		$prep->bindValue(4, $this->user->getFirstName(), PDO::PARAM_STR);
		$prep->bindValue(4, $this->user->getAge(), PDO::PARAM_INT);
		 
		//Compiler et exécuter la requête
		$prep->execute();
		 
		//Récupérer toutes les données retournées
		/*$arrAll = $prep->fetchAll();
		 
		//Clore la requête préparée
		$prep->closeCursor();
		$prep = NULL;*/
	}

	public function selectClientById($id)
	{
		$query = 	'SELECT *
					 FROM clients
					 WHERE id = ?';

		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $id, PDO::PARAM_INT);

		$prep->execute();
		$result = $prep->fetch();
		$prep->closeCursor();

		return $result;
	}

	public function selectAllClients()
	{
		$query = 	'SELECT *
					 FROM clients';

		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $id, PDO::PARAM_INT);

		$prep->execute();
		$result = $prep->fetchAll();
		$prep->closeCursor();

	var_dump($result);
		return $result;
	}

	public function deleteAnimeById($id)
	{

	}
}