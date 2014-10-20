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
	
	public function getUrlByIdUrl($idUrl)
	{
		$query = "	SELECT id, full_content_vostfr
					FROM animes_urls
					WHERE id = ?";
		
		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $idUrl, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetch(PDO::FETCH_ASSOC);
		
		return $result;
	}
	
	public function getUrlsByIdAnime($idAnime)
	{
		$query = "	SELECT au.id, au.full_content_vostfr, e.episode_number, wu.name as 'website_name'
					FROM animes_urls au
					INNER JOIN episodes e
					ON e.id = au.id_episode
					INNER JOIN  animes a
					ON a.id = e.id_animes
					INNER JOIN websites_urls wu
					ON au.id_website_url = wu.id
					WHERE a.id = ?";
		
		$prep = $this->db->conn_id->prepare($query);
		$prep->bindValue(1, $idAnime, PDO::PARAM_INT);
		
		$prep->execute();
		$result = $prep->fetchAll(PDO::FETCH_ASSOC);
		
		return $result;
	}

}