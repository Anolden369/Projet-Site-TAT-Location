<?php
Include('bibliotheque.php') ;
include('entete.php');
if (isset($_SESSION['pseudo'])) {
    echo "<h1>Vous êtes déjà inscrit</h1>";
} else {
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mercedes.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
	<title>Veuillez vous s'inscrire !</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	</head>
	<body><br><br><br><br><br><br><br><br>
    <center>
		<h2 class="sp">Veuillez vous s'inscrire !</h2>
	</center>
    <center>
        <br><br>
        <div class="card w-75">
            <div class="card">
                <div class="card-header">
                    Inscription
                </div>
                <div class="card-body">
                    <form action="traitement_inscription.php" method="post" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip02" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" id="validationTooltip02" required>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltip01" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="validationTooltip01" required>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Pseudo</label>
                            <div class="input-group has-validation">
                                <input type="text" name="pseudo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control" id="validationTooltip03" required>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="validationTooltipUsername" class="form-label">E-mail</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                <input type="email" name="mail" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                            </div>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Adresse</label>
                            <input type="text" name="rue" class="form-control" id="validationTooltip03" required>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip05" class="form-label">Code Postal</label>
                            <input type="text" name="cp" class="form-control" id="validationTooltip05" required>
                        </div>
                        <div class="col-md-6 position-relative">
                            <label for="validationTooltip03" class="form-label">Ville</label>
                            <input type="text" name="ville" class="form-control" id="validationTooltip03" required>
                        </div>
                        <div class="col-md-3 position-relative">
                            <label for="validationTooltip04" class="form-label">Pays</label>
                            <select name="pays" class="form-select" id="validationTooltip04" required>
                            <option selected disabled value="">Choisir...</option>
                            <option>France</option>
                            <option>Belgique</option>
                            <option>Allemagne</option>
                            <option>Suisse</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="envoi"> S'inscrire </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </center>   

	    <br><br>
	</body>
	</html>
<?php
}
?>