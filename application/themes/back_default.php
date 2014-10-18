<!DOCTYPE html>
<html lang="fr">
	<head>
		<title><?= $titre; ?></title>
		<meta http-equiv="Content-Type" content="text/html" charset="<?= $charset ?>" />

		<?php foreach ($css as $url) : ?>
			<link rel="stylesheet" type="text/css" href="<?= $url ?>" />
		<?php endforeach; ?>
		<?php foreach ($js as $url) : ?>
			<script type="text/javascript" src="<?= $url ?>" ></script>
		<?php endforeach; ?>
	</head>
	
	<body>
		<?php
			require_once 'header.php';
		?>
		<div class="navbar">
				<div class="container">
					<nav class="nav-collapse" role="navigation">
						<ul class="nav">
							<li><a href="#">Gestion des scans</a></li>
							<li class="dropdown">
								<a data-toggle="dropdown" class="open-close dropdown-toggle" href="#">Gestion des animés<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?= site_url(array('pages/PAnime'));?>">Ajouter un animé</a></li>
									<li><a href="#">Lien #2-b</a></li>
									<li><a href="#">Lien #2-c</a></li>
								</ul>
							</li>
							<li><a href="#">Gestion des utilisateurs</a></li>
							<li><a href="#">Lien #4</a></li>
						</ul>
					</nav>
				</div><!-- end of .container -->
		</div><!-- end of .navbar .navbar -->
		<!--<div id="content">
			<div id='menu'>
				<div class="panel panel-default">
				 	<div class="panel-heading">Menu</div>
				 	<div class="panel-body">
						<ul>
							<li><a href="<?= site_url(array('home')); ?>">Accueil</a></li>
							<li><a href="<?= site_url(array('anime')); ?>">Gestion des animés</a></li>
							<li><a href="<?= site_url(array('scan')); ?>">Gestion des scans</a></li>
							<li><a href="<?= site_url(array('user')); ?>">Gestion des utilisateurs</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-default">
				 	<div class="panel-heading">Bienvenue <?= $login ?></div>
				 	<div class="panel-body">
						<a class="btn btn-primary btn-xs" href="<?= site_url(array('login', 'logout')); ?>">Deconnexion</a>
					</div>
				</div>
			</div>-->

			<div id="view">
				<?= $output; ?>
			</div>

			<div class="clear"></div>
		</div>
	</body>
</html>