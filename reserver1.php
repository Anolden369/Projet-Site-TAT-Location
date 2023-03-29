<?php
Include('bibliotheque.php') ;
include('entete.php');

if (!isset($_SESSION['pseudo'])) {
    $string= "Vous devez vous connecter pour pouvoir réserver un de nos luxueux véhicules !";
    echo '<br><br><span style="color: white; font-size: 150%;"> ';
    echo $string."<span>"; 
    exit;
  }

$pseudo = $_SESSION['pseudo']; // récupération du pseudo
$requete = "SELECT *
            FROM vehicule;";

$connexion=connecter();
$resultat = mysqli_query($connexion, $requete);

mysqli_close($connexion);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Réservation de véhicules</title>
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
        SELECT {
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
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
</head>
<br>
<body>
    <font color="white" size="4,5rem">
    <form action="traitement_reservation.php" method="post">
        <center><h3>Louer un de nos véhicules</h3></center><br>
        <label for="nom">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" style="background-color:white;"  value="<?=$_SESSION['pseudo'];?>" disabled>

        <libellé for="Immatriculation"> Modèle de véhicule :</libellé>
        <SELECT type="select" name="Immatriculation">

<?php
        while ($ligne= mysqli_fetch_assoc($resultat)) {

        $Immaticulation=$ligne['Immatriculation'];
        $modele=$ligne['modele'];
?>
        <option value="<?=$Immaticulation;?>"><?=$modele;?></option>
 <?php     
    }
    $currentDate = date("Y-m-d");
  ?> 
    </SELECT>
        <br><br>
        <label >Date de début :</label>
        <input type="date" id="date_debut" min="<?=$currentDate;?>" name="date_debut">
        
        <label >Date de fin :</label>
        <input type="date" id="date_fin" min="<?=$currentDate;?>" name="date_fin">
        
        <input type="submit" value="Réserver">
    </form>
    <font>
</body>
</html>