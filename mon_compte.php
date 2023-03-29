<html>
	<head>
	    <meta charset="utf-8">
    </head>
</html>
<?php
include('entete.php');

if (!isset($_SESSION['pseudo'])) {
  $string= "Vous devez vous connecter pour avoir accès à votre compte et à vos réservations !";
  echo '<br><br><span style="color: white; font-size: 150%;"> ';
  echo $string."<span>"; 
  exit;
}

$db = mysqli_connect('localhost', 'root', 'root', 'agence_loc');

$query = "SELECT *
FROM client c
WHERE c.pseudo = '{$_SESSION['pseudo']}'";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
  <head>
    <style>
      p {
        color: white;
      }
      table {
        width: 100%;
        border-collapse: collapse;
        color: white;
      }
      th {
        border: 1px solid white;
        padding: 8px;
        text-align: left;
        color: white;
      }
      td {
        border: 1px solid white;
        padding: 8px;
        text-align: left;
        font-family: "Nunito";
      }
      th {
        background-color: black;
      }
      .button-40 {
        background-color: #111827;
        border: 1px solid transparent;
        border-radius: .75rem;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        flex: 0 0 auto;
        font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5rem;
        padding: .50rem 1.2rem;
        text-align: center;
        text-decoration: none #6B7280 solid;
        text-decoration-thickness: auto;
        transition-duration: .2s;
        transition-property: background-color,border-color,color,fill,stroke;
        transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        width: auto;
      }

      .button-40:hover {
        background-color: #374151;
      }

      .button-40:focus {
        box-shadow: none;
        outline: 2px solid transparent;
        outline-offset: 2px;
      }

      @media (min-width: 768px) {
        .button-40 {
          padding: .75rem 1.5rem;
        }
      }
    </style>
  </head>
  <body>
  <meta charset="utf-8">
    <table><br>
      <font color="white">
        <h2>Mon compte</h2>
      </font>
      <br>
        <tr>
          <th>Pseudo</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Adresse</th>
          <th>Code Postal</th>
          <th>Pays</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $_SESSION['pseudo']; ?></td>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['mail']; ?></td>
            <td><?php echo $row['rue']; ?></td>
            <td><?php echo $row['cp']; ?></td>
            <td><?php echo $row['pays']; ?></td>
          </tr>
        <?php } ?>
    </table>
<?php

if (!isset($_SESSION['pseudo'])) {
  $string= "Vous devez vous connecter pour voir vos réservations !";
  echo '<br><br><span style="color: white;"> ';
  echo $string."<span>"; 
  exit;
}

$db = mysqli_connect('localhost', 'root', 'root', 'agence_loc');
if (!$db) {
  echo "Erreur de connexion à la base de données";
  exit;
}

// récupérer les immatriculation et modele
$sqle = "SELECT * FROM vehicule";
$resultat = mysqli_query($db, $sqle);
if(mysqli_num_rows($resultat)>0){
  $row = mysqli_fetch_assoc($resultat);
  $Immatriculation = $row['Immatriculation'];
}

// calculer le prix en fonction du nombre de jours de location d'un véhicule*

$sqlr = "SELECT r.*, v.prix FROM reservations r JOIN vehicule v ON r.Immatriculation = v.Immatriculation WHERE r.pseudo = '{$_SESSION['pseudo']}' order by date_debut";
$resultate = mysqli_query($db, $sqlr);
if(mysqli_num_rows($resultate)>0){
  while ($row = mysqli_fetch_assoc($resultate)) {
    $prix = $row['prix'];
    $duree = $row['duree'];
    $prix_total = $duree * $prix;
    $numReservation = $row['numReservation'];

    $sqlu = "UPDATE reservations SET prix = $prix_total WHERE numReservation = $numReservation";
    $resultatu = mysqli_query($db, $sqlu);
  }
}


$query = "SELECT *
          FROM reservations r
          JOIN vehicule v ON r.Immatriculation = v.Immatriculation
          WHERE r.pseudo = '{$_SESSION['pseudo']}' order by date_debut";
$result = mysqli_query($db, $query);

?>
<br>
<a href="compte.php">
<input type="button" class="button-40" value="Modifier les informations personnelles de votre compte  " />
</a>
<br><br><br>
    <table><br>
    <meta charset="utf-8">
    <font color="white">
      <h2>Mes reservations</h2>
    </font>
    <br>
      <tr>
        <th>numReservation</th>
        <th>Marque - Modele</th>
        <th>Immatriculation</th>
        <th>Date de debut</th>
        <th>Date de fin</th>
        <th>Nombre de jours</th>
        <th>Prix par jour TTC</th>
        <th>Prix Total TTC</th>
      </tr>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <?php
    date_default_timezone_set('Europe/Paris');
    $prix_total = $row['duree'] * $row['prix'];
    ?>
    <tr>
      <td><?php echo $row['numReservation']; ?></td>
      <td><?php echo $row['modele']; ?></td>
      <td><?php echo $row['Immatriculation']; ?></td>
      <td><?php echo date("d-m-Y", strtotime($row['date_debut'])); ?></td>
      <td><?php echo date("d-m-Y", strtotime($row['date_fin'])); ?></td>
      <td><?php echo $row['duree']; ?> jours</td>
      <td><?php echo $row['prix']; ?> €</td>
      <td><?php echo $prix_total; ?> €</td>
    </tr>
  <?php } ?>
</table>
</html>