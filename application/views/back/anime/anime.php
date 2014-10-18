<div>
		<form method="post" action="uploadVideo.php" enctype="multipart/form-data">
		     <label for="file">Fichier (tous formats | max. 2Go) :</label><br />
		     <input type="hidden" name="MAX_FILE_SIZE" value="200048576"/>
		     <input type="file" name="file" id="file" multiple = "true"/><br />
		     <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
		     <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />
		     <input type="submit" name="submit" value="Envoyer" />
		</form>
	</div>

	<div>
		<video width="600" height="340" controls>
		    <source src="videos/test/dota2_moment_66.mp4" type="video/mp4">
		    <source src="movie.webm" type="video/webm">
	    	<source src="videos/test/test.wmv" type="video/ogg">
		</video>
	</div>

	Créer un animé : (Avec au moins un épisode. Le 1 de préférence :) )
	<div>
		<form method="post" action="addAnime.php" enctype="multipart/form-data">
		     <label for="name_fr">Titre du fichier en fr (max. 50 caractères) :</label><br />
		     <input type="text" name="name_fr" value="" placeholder="Titre fr" id="name_fr" /><br />
		     <label for="name_en">Titre du fichier en en (max. 50 caractères) :</label><br />
		     <input type="text" name="name_en" value="" placeholder="Titre en" id="name_en" /><br />
		     <label for="name_jp">Titre du fichier en jp (max. 50 caractères) :</label><br />
		     <input type="text" name="name_jp" value="" placeholder="Titre jp" id="name_jp" /><br />
		     <label for="resume">Synopsis :</label><br />
		     <textarea name="resume" id="resume"></textarea><br />
		     <input type="submit" name="submit" value="Envoyer" />
		</form>
	</div>

<?php

	echo form_open('anime/addAnime');
	$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => 'johndoe',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

echo form_input($data);
echo form_submit('mysubmit', 'Submit Post!');
?>