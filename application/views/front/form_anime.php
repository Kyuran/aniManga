<div class="infos_anime">
	<div class="image">
		<img width="340" height="427" src="<?= base_url().$infos_anime['thumbnail_path'];?>" />
	</div>
	<p><strong>Titre:</strong> <?=$infos_anime['title_fr'];?></p>
	<p><strong>Année de parution:</strong> <?=$infos_anime['parution_year'];?></p>
	<p><strong>Nombre d'épisodes:</strong> <?=$infos_anime['nb_episode'];?></p>
	<p><strong>Genre:</strong></p>
	<p><strong>Résumé:</strong></p> <p class="resume"><?=$infos_anime['resume'];?></p>
	<div id="dialog" class="dialog" title="Liste des épisodes">
		<div id="accordion" class="block_hidden">
			<?php
				foreach ($infos_episodes as $key => $infos_episode) {
					echo '<h3>épisode '.$infos_episode['episode_number'].'</h3>';
					echo '<p>';
					foreach ($infos_urls as $key => $infos_url) {
						if($infos_episode['episode_number'] == $infos_url['episode_number']) {
							echo anchor('pages/PAnime/contentVideoPage/'.$infos_url['id'],'épisode '.$infos_url['episode_number']);
							echo ' provenant de '.$infos_url['website_name'].'</br>';
							echo '------------------------------</br>';
						}
					}
					echo '</p>';
				} 
			?>
		</div>
	</div>
	<p><a id="opener" onclick="displayEpisodes()">Accéder aux épisodes</a></p>
	<?php var_dump($infos_urls);	?>