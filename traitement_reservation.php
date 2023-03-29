<html>
	<head>
	    <meta charset="utf-8">
    </head>
</html>
<?php

session_start();
$pseudo = $_SESSION['pseudo'];
$host = "localhost";
$username = "root";
$password = "root";
$dbname = "agence_loc";
$conn = mysqli_connect($host, $username, $password, $dbname);
date_default_timezone_set('Europe/Paris');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Immatriculation = mysqli_real_escape_string($conn, $_POST["Immatriculation"]);
$date_debut = mysqli_real_escape_string($conn, $_POST["date_debut"]);
$date_fin = mysqli_real_escape_string($conn, $_POST["date_fin"]);

$currentDate = date("Y-m-d");

if ($date_debut < $currentDate) {
    echo 'La date de début ne peut pas être antérieure à la date actuelle.';
} elseif ($date_debut >= $date_fin) {
    echo 'La date de fin doit être postérieure à la date de début.';
} else {
    $sql = "SELECT * FROM reservations WHERE Immatriculation = '$Immatriculation' AND (date_debut < '$date_fin' AND date_fin > '$date_debut')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "L'immatriculation n'est pas disponible pour cette période.";
    } else {
        $nbjours = date_diff(date_create($date_debut), date_create($date_fin))->days;
        $sql = "INSERT INTO reservations (pseudo, Immatriculation, date_debut, date_fin, duree) 
            VALUES ('$pseudo', '$Immatriculation', '$date_debut', '$date_fin','$nbjours')";
        if (mysqli_query($conn, $sql)) {
            echo "Réservation effectuée";
            header("Location: mon_compte.php");
        } else {
            echo "Erreur lors de l'enregistrement de la réservation : " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);


?>