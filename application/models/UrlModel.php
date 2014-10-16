<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UrlModel extends CI_Model
{

	public function __construct()
	{
	}
	
	public function getUrlByIdEpisode($idEpisode)
	{
		$query = "	SELECT id, full_content_vostfr
					FROM animes_urls
					WHERE id_episode = ?";
		
		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $idEpisode, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}

}