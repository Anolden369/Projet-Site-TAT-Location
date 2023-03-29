<?php
include('entete.php');
include('bibliotheque.php');

$pseudo = $_SESSION['pseudo']; // récupération du pseudo
$requete = "SELECT *
            FROM client
            WHERE pseudo = '$pseudo';";

$connexion=connecter();

$resultat = mysqli_query($connexion, $requete);
$ligne= mysqli_fetch_assoc($resultat);

$nom=$ligne['nom'];
$prenom=$ligne['prenom'];
$mail=$ligne['mail'];
$pays=$ligne['pays'];
$ville=$ligne['ville'];
$rue=$ligne['rue'];
$cp=$ligne['cp'];

mysqli_close($connexion);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifiez vos informations personnelles</title>
    <meta charset="utf-8">
    <style>
        form {
            width: 500px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 50px;
            font-family: 'Nunito';
        }
        input[type="text"], input[type="date"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: 'Nunito';
        }
        input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: rgb(187, 28, 28);
            cursor: pointer;
            color: white;
            font-family: 'Nunito';
            font-size: 2rem;
        }
        input[type="submit"]:hover {
            background-color: rgb(29, 175, 16);
            color: white;
            font-family: 'Nunito';
        }
        label {
            font-weight: bold;
            margin-bottom: 10px;
            font-family: 'Nunito';
        }
    </style>
<body>
    <font color="white" size="4,5rem">
        <form action="modif_client.php" method="post">
            <center><h3>Modifiez vos informations personnelles</h3></center><br>

            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" style="background-color:white;"  value="<?= $pseudo;?>" disabled>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= $nom;?>">
            
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?= $prenom;?>">
            
            <label for="adresse">Adresse :</label>
            <input type="text" id="rue" name="rue" value="<?= $rue;?>">
            
            <label for="mail">Mail :</label>
            <input type="text" id="mail" name="mail" value="<?= $mail;?>">
            
            <label for="cp">Code Postal :</label>
            <input type="text" id="cp" name="cp" value="<?= $cp;?>">
            
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" value="<?= $ville;?>">
            
            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" value="<?= $pays;?>">
            
            <input type="submit" value="Modifier">

        </form>
    <font>
</body>
</html>