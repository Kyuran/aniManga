<?php if (!defined('BASEPATH')) exit('Not direct script access allowed');

class Utils
{

	public function __construct()
	{
	}

	public function displayAllContentsForOneEpisode($full_content)
	{
		foreach ($full_content as $key => $value) {
			echo $value['full_content_vostfr'];
		}
	}	
	
	public function displayAllInfosAnimes($infos)
	{
		foreach ($infos as $key => $value) {
			echo '<div class="image_list">';
			echo anchor('pages/PAnime/animePageInfos/'.$value['id'],'<img width="240" height="327" src="'.base_url().$value['thumbnail_path'].'"/>');
			echo '<p>';
			echo anchor('pages/PAnime/animePageInfos/'.$value['id'],$value['title_fr']);
			echo '</p>';
			echo '</div>';
		}
	}
}