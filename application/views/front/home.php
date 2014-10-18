<div id="images">
<?php
	foreach ($all_infos as $key => $value) {
		echo '<div class="image_list">';
		echo anchor('pages/PAnime/animePageInfos/'.$value['id'],'<img width="240" height="327" src="'.base_url().$value['thumbnail_path'].'"/>');
		echo '<p>';
		echo anchor('pages/PAnime/animePageInfos/'.$value['id'],$value['title_fr']);
		echo '</p>';
		echo '</div>';
	} 
?>
</div>