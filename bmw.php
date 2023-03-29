<?php
Include('bibliotheque.php') ;
include('entete.php');
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/mercedes.css">
	<title>BMW</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	</head>
	<style>
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
	<body>
	<br><br><br>
	<center>
		<h2 class="sp"><br><br>BMW</h2>
	</center>
	<br>
	<p class="sp">Les sportives<br><br></p>
	<table>
	            <tr>
	                <td>
	                    <div class="card" style="width: 500%; position: relative; left: 40px; top: 15px;"><br>
	                            <h2 class="card-title" style="color: white;">BMW M4 G2 COMPETITION</h2> 
	                            <h3 class="card-title" style=" color: grey;">À partir de 350 € / jour</h3>
								<h3 class="card-title" style=" color: grey;">Immatriculation : GK-323-HK</h3>
	                        	<img src="https://images.caradisiac.com/logos-ref/modele/modele--bmw-serie-4-g82-m4/S0-modele--bmw-serie-4-g82-m4.jpg" class="card-img-top" alt="a35" style="width: 18%; color:wihte;">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        </div>
					    </div>
	                </td>
	                <td>
	                    		<div class="card" style="width: 500%; position: relative; left: 180px; top: 6px; "><br>
	                            <h2 class="card-title" style="color: white;">BMW M5 COMPETITION BERLINE</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 520 € / jour</h3>
								<h3 class="card-title" style=" color: grey;">Immatriculation : TC-711-FG</h3>
	                        	<img src="https://lesvoitures.fr/wp-content/uploads/2020/06/BMW-M5-restylee-2020-40.jpg" alt="A45" style="width: 13%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        	</div>
					    </div>
	                </td>

	                 <td>
	                    		<div class="card" style="width: 500%; position: relative; right: -80px;"><br>
	                            <h2 class="card-title" style="color: white;">BMW M2 COMPETITION</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 650 € / jour</h3>
								<h3 class="card-title" style=" color: grey;">Immatriculation : MA-854-FX</h3>
	                        	<img src="https://www.asphalte.ch/news/wp-content/uploads/2019/11/BMW-M2-F87-CS-750.jpg" alt="C 63S Coupé" style="width: 29%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        	</div>
					    </div>
	                </td>
	           </tr>
	    </table>
	    <br><br><br><br><br><br><br><br><br><br>
	</body>
	</html>