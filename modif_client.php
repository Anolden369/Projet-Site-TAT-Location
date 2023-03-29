<?php
include('bibliotheque.php');
include('entete.php');

$pseudo=$_SESSION['pseudo']; //récupération des valeurs du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$pays=$_POST['pays'];
$ville=$_POST['ville'];
$rue=$_POST['rue'];
$cp=$_POST['cp'];

// requête qui fait la mise à jour
$requete = "UPDATE client
            SET pseudo = '$pseudo', nom = '$nom', prenom = '$prenom', mail ='$mail', pays = '$pays', ville ='$ville', rue ='$rue', cp ='$cp'
            WHERE pseudo = '$pseudo';";

$connexion = connecter();
$resultat = mysqli_query($connexion, $requete);
mysqli_close($connexion);

header ("Location: mon_compte.php");
?>