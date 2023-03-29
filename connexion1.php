<?php
Include('bibliotheque.php') ;
include('entete.php');
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
	<body><br><br><br><br><br><br><br><br><br><br>
    <center>
		<h2 class="sp">Veuillez vous connecter !</h2>
	</center>
    <center>
    <br><br>
    <div class="card w-25">
            <div class="card">
                <div class="card-header">
                    Connexion
                </div>
                <div class="card-body">
                    <form action="traitement_connexion1.php" method="post" class="row g-4 needs-validation" novalidate>
                        <center>
                        <table>
                            <tr>
                                <td>
                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltipUsername" class="form-label">Pseudo</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="pseudo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12 position-relative">
                                        <label for="validationTooltip03" class="form-label">Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control" id="validationTooltip03" required>
                                    </div>
                                </td>
                            </tr>
                        </table><br>
                        <table>
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit" name="envoi"> Se connecter </button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        </center>    
        </center>   

	    <br><br>
	</body>
</html>