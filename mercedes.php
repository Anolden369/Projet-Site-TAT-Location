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
	<title>Mercedes-Benz</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
	</head>
	<body>
	<br><br><br>
	<center>
		<h2 class="sp">Mercedes-Benz</h2><br>
	</center>
	<br>
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
	<p class="sp" style="position:relative; left: 10px;">Les sportives</p> 
	<table>
	            <tr>
	                <td>
	                    <div class="card" style="width: 500%; position: relative; left: 50px; top: 15px;">
	                            <img src="image/amg.png" style="width: 4%; position: relative; left: 330px; top: 100px;">
	                            <h2 class="card-title" style="color: white;">Mercedes-Benz A35 AMG</h2> 
	                            <h3 class="card-title" style=" color: grey;">À partir de 250 € / jour</h3>
	                            <h3 class="card-title" style=" color: grey;">Immatriculation : RC-305-PG</h3>
	                        	<img src="https://onatest.ch/wp-content/uploads/2020/09/Location-Mercedes-AMG-A35-Geneve.jpeg" class="card-img-top" alt="a35 amg" style="width: 35%; color:wihte;">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        </div>
					    </div>
	                </td>
	                <td>
	                    		<div class="card" style="width: 500%; position: relative; left: 350px; top: 5px; ">
	                    		<img src="image/amg.png" style="width: 3%; position: relative; left: 300px; top: 100px;">
	                            <h2 class="card-title" style="color: white;">Mercedes-Benz A 45S AMG</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 350 € / jour</h3>
	                            <h3 class="card-title" style=" color: grey;">Immatriculation : FF-420-MG</h3>
	                        	<img src="https://auto.cdn-rivamedia.com/photos/annoncecli/big/mercedes-classe-a-45-s-mercedes-amg-8g-dct-speedshift-amg-4matic-129106360.jpg" alt="A45S" style="width: 25%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        	</div>
					    </div>
	                </td>

	                 <td>
	                    		<div class="card" style="width: 500%; position: relative; right: -550px;top: 15px;">
	                            <h2 class="card-title" style="color: white;">Mercedes-AMG C 63S COUPÉ</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 350 € / jour</h3>
	                            <h3 class="card-title" style=" color: grey;">Immatriculation : AM-633-LS</h3>
	                        	<img src="https://s3.ecompletocarros.dev/images/lojas/164/veiculos/36230/veiculoInfoVeiculoImagesMobile/vehicle_image_1599860488_63c85d8fea3a65f4a0888e30607c53a7.jpeg" alt="C 63S Coupé" style="width: 28%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a> <br>
	                        	</div>
					    </div>
	                </td> 

	                	<p class="sp" style="position: relative; top: 680px; left: 10px;">Les 4x4</p> <br>

	                 <td>
	                    		<div class="card" style="width: 500%; position: relative; left: -280px;top: 650px">
	                            <h2 class="card-title" style="color: white;">MERCEDES-BENZ GLC 63 S COUPÉ AMG</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 590 € / jour</h3>
	                            <h3 class="card-title" style=" color: grey;">Immatriculation : NJ-598-ZO</h3>
	                        	<img src="https://sf1.auto-moto.com/wp-content/uploads/sites/9/2019/04/mercedes-amg-glc-63-2019-6-750x410.jpg" alt="CLC 63S Coupé" style="width: 35%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        	</div>
					    </div>
	                </td>

	                 <td>
	                    		<div class="card" style="width: 500%; position: relative; right: 1100px;top: 650px">
	                            <h2 class="card-title" style="color: white;">MERCEDES-BENZ G 63 AMG</h2>
	                            <h3 class="card-title" style="color: grey;">À partir de 590 € / jour</h3>
	                            <h3 class="card-title" style=" color: grey;">Immatriculation : NJ-598-ZO</h3>
	                        	<img src="http://res.cloudinary.com/dsxfn6o4q/image/upload/v1636983788/wkxrrd0gfnmnfw3n5tpm.jpg" alt="G 63 AMG" style="width: 20%">
	                        	<div class="card-body">
	                            <a href="reserver1.php">
								<input type="button" class="button-40" value="Reserver" />
								</a>
	                        	</div>
					    </div>
	                </td>
	           </tr>
	    </table>

	    <br><br><br><br><br><br><br><br><br>
	</body>
	</html>