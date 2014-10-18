<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EpisodeModel extends CI_Model
{

	public function __construct()
	{
	}
	
	public function getEpisodesByIdAnime($idAnime)
	{
		$query = "	SELECT id, episode_number
					FROM episodes
					WHERE id_animes = ?";
		
		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $idAnime, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}

}