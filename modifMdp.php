<?php
include('entete.php');
?>
<!doctype html>
<html lang="fr">
<br><br><br><br>
    <body style="background-color:#E5E5E5;">
        <center>
        <h1>La page de modification de mot de passe</h1>
        <h2><h2>
        </center>
        <br><br>
        <center>
        <div class="card w-75">
            <div class="card">
                <div class="card-header">
                    Modifiez votre mot de passe
                </div>
                <div class="card-body">
                    <form action="traitementModifMdp.php" method="post" class="row g-1 needs-validation">
                        <table>
                            <tr>
                                <td>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationTooltipUsername" class="form-label">Pseudo</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="pseudo" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationTooltip03" class="form-label">Mot de passe actuel</label>
                                        <input type="password" name="mdp" class="form-control" id="validationTooltip03" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-4 position-relative">
                                        <label for="validationTooltip03" class="form-label">Nouveau mot de passe</label>
                                        <input type="password" name="newmdp" class="form-control" id="validationTooltip03" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    <div class="col-12">
                                        <br>
                                        <button class="btn btn-primary" type="submit" name="envoi"> Modifier </button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        </center>    
    </body>
</html>