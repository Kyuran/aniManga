<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AnimeModel extends CI_Model
{
	private $id;
	private $name_fr;
	private $name_en;
	private $name_jp;
	private $resume;
	private $id_url;
	private $id_rating;
	private $anime;

	public function __construct()
	{
	}
	
	public function getInfosFromAnimes()
	{
		$query = "	SELECT *
					FROM animes
				 ";
		
		$prep = $this->db->conn_id->prepare($query);
		//$prep->bindValue(1, 1, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}

	public function getInfosAnimeById($id)
	{
		$query = "	SELECT *
					FROM animes
					WHERE id = ?";
		
		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $id, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}

	public function insertAnime()
	{
		$query = 	"INSERT INTO animes(name_fr,name_en,name_jp,resume)
					VALUES(?,?,?,?)";

		$prep = $this->db->prepare($query);
		 
		//Associer des valeurs aux place holders
		$prep->bindValue(1, $this->anime->getNameFr(), PDO::PARAM_STR);
		$prep->bindValue(2, $this->anime->getNameEn(), PDO::PARAM_STR);
		$prep->bindValue(3, $this->anime->getNameJp(), PDO::PARAM_STR);
		$prep->bindValue(4, $this->anime->getResume(), PDO::PARAM_STR);
		 
		//Compiler et exécuter la requête
		$prep->execute();
		 
		//Récupérer toutes les données retournées
		/*$arrAll = $prep->fetchAll();
		 
		//Clore la requête préparée
		$prep->closeCursor();
		$prep = NULL;*/
	}

	public function selectAnimeById($id)
	{
		$query = 	'SELECT *
					 FROM animes
					 WHERE id = ?';

		$prep = $this->db->prepare($query);
		$prep->bindValue(1, $id, PDO::PARAM_INT);

		$prep->execute();
		$result = $prep->fetch();
		$prep->closeCursor();

		return $result;
	}

	public function selectAllAnimes()
	{

	}

	public function deleteAnimeById($id)
	{

	}
}