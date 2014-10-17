<div>
	<?php

	if(!$success) {
		echo form_open('anime/addAnime');

		foreach ($config_form as $key => $value) {
				echo '<p>';
				echo form_error($value['name']);
				echo form_label($value['label'], $key) . "  " . $value['function']($value);
				echo '</p>';
		}

		echo form_submit('mysubmit', 'Submit Post!');
	}
?>
</div>