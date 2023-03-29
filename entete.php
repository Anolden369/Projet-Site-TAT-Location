<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAT Location</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/mercedes.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
</head>
<body>
<nav class="navbar">
	<div class="nav-links">
		<ul><img class="logoLoc" src="logo/logo3.png">
			<li><a class="active" href="index.php">Accueil</a></li>
				<div class="dropdown">
					<li><button class="dropbtn">Catalogue</button></li>
					<div class="dropdown-content">
						<a href="mercedes.php">Mercedes-Benz</a>
						<a href="audi.php">Audi</a>
						<a href="rangerover.php">Range-Rover</a>
						<a href="bmw.php">BMW</a>
					</div>
				</div>
			<li><a href="reserver1.php">Réserver</a>
			<li><a href="mon_compte.php">Mon compte</a>
			<li><a href="inscription1.php">Inscription</a>
			<li>
			<font color="white" size="4,5pt">
				<div>
					<div>
						<?php
						session_start();
							if  (isset($_SESSION['pseudo'])) 
							{
						?>    <!--affichage d’un lien permettant de se déconnecter et du message-->
						Vous êtes connecté <br>
						<a href="deconnexion.php">Déconnexion</a><br>
						<?php    }
						else
						{ 
						?>    <!--affichage d’un lien vers une page permettant de s’inscrire ou de se connecter et du message-->
						Vous n’êtes pas connecté<br>
						<a href="connexion1.php">Connexion</a><br>
						<?php    } ?>
					</div>
				</div>
			</font>
			</li>
</nav>
</body>
</html>