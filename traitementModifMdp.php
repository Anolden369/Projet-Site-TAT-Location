<?php
//fonction permettant de se connecter à la bdd
function connecter()
  {
    $hote       = 'localhost';
    $utilisateur= 'root';
    $passe      = 'root';
    $base       = 'agence_loc';
 $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);
// instruction qui permet de conserver les accents lors de la connexion au serveur de bases de données
    mysqli_query($connexion, 'SET NAMES UTF8');
    return $connexion;
  }
  

$pseudo = $_POST['pseudo'];         // récupération des valeurs des variables avec la méthode POST
$mdp = $_POST['mdp'];
$newmdp = $_POST['newmdp'];


// requete qui va chercher le mot de passe actuel
$requete ="SELECT mdp
FROM client
WHERE pseudo='$pseudo'";

// connexion à la base de données
$connexion = connecter();

//Exécution de la requête
$resultat = mysqli_query($connexion, $requete);
$mdph = mysqli_fetch_assoc($resultat)['mdp'];

//si le mdp actuel chifré ($mdph) ne correspond pas au mot de passe saisi (résultat 0) alors
if (mysqli_num_rows($resultat) == 0 || !password_verify($mdp, $mdph)){ 

	echo '<a href=modifMdp.php >l\'identifiant ou le mot de passe est incorrect, cliquez ici pour vous authentifier à nouveau<a>';
}
// sinon ça correspond et on fait la mise à jour
else{


// création d'un nouveau mdp chiffré $newmdph à partir de $newmdp
$newmdph = password_hash($newmdp, PASSWORD_DEFAULT);

// requete de mise à jour dans la base de données qui remplace le mot de passe par la valeur de $newmdph
$requete = "UPDATE client SET mdp = '$newmdph' WHERE pseudo = $pseudo;";

//Exécution de la requête

$resultat = mysqli_query($connexion, $requete);

echo $requete;

  }

?>
