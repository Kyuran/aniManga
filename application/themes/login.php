<section class="login">
	<?php echo form_open('pages/login'); ?><!--<form class ="form_user form-horizontal" method="post" action="pages/login">-->
		<h4 class="login">Connexion</h4>
		<section class="control-group">
			<!--<label class="control-label" for="email">Email</label>-->
			<section class="controls">
				<input class="validate[required,custom[email]] btn_login" type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
				<?php echo form_error('email'); ?>
			</section>
		</section>
			 
		<section class="control-group">
			<!--<label class="control-label" for="mdp">Mot de passe</label>-->
			<section class="controls">
				<input class="validate[required] btn_login" type="password" id="inputPassword" placeholder="Password" name="password">
				<?php echo form_error('password'); ?>
			</section>
		</section>
		<button id="login_validate" class="login btn btn-large btn-primary" type="submit">Valider</button>
	<?php echo form_close(); ?><!--</form>-->
</section>