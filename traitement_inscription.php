<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
	</head>
</html>
<?php
session_start();
// appel de la bibliothèque de fonctions
include('bibliotheque.php');

//récupération des valeurs provenant du formulaire
$mdp=$_POST['mdp'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$pseudo=$_POST['pseudo'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$rue=$_POST['rue'];
$cp=$_POST['cp'];

/*On fait une requête pour s’assurer que le pseudo n’existe pas dans la bdd
Requête qui cherche le pseudo dans la bdd*/

$requete ="SELECT pseudo
		   	  FROM CLIENT
				 	WHERE pseudo='$pseudo'";
			
// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);


if (mysqli_num_rows($resultat) == 0)
  { 
	// si le resultat est egal a 0 alors ce pseudo n’existe pas
	//Hacher le mot de passe récupéré et le stocker dans une variable $mdph

		$mdph = password_hash($mdp, PASSWORD_DEFAULT);

	// requête d'ajout dans la base de données
	$requete = "INSERT INTO client (mdp, nom, prenom, mail, pseudo, pays, ville, rue, cp)
				VALUES ('$mdph','$nom','$prenom','$mail','$pseudo','$pays','$ville','$rue','$cp');";
		
	// connexion à la base de données grâce à la fonction connecter
	$connexion =connecter();	
			
	//Exécution de la requête
	$resultat = mysqli_query($connexion,$requete);	
			
	//Fermeture de la bdd
	mysqli_close($connexion);

	// Ouverture d’une session pour ce pseudo
	$_SESSION['pseudo'] = $pseudo;

	// redirection vers l'accueil

	header ("Location: index.php" );
   }
   else
   {
	   header('Refresh:5; url=inscription1.php');
	   echo '<a hreh=inscription_connexion.php >Ce pseudo est déjà utilisé, vous allez être redirigé à la page d\'inscription<a>';
   }
?>