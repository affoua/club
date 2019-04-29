<!DOCTYPE html>
<html lang="en">
<head>
	<title>accueil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
		
				<div class="row">
						<div class="col-2" style="background: -webkit-linear-gradient(bottom, #005bea, #00c6fb);">


							
							<br><br><br><br><br>
                          <form method="POST" action="../controler/liste_joueur.php ">
                          	<input type="hidden" name="Juventus">
                          	<input style=" border-radius: 40px;width: 5cm; height:1.5cm;"  type="submit" name="envoyer" value="Juventus"></form><br><br>
						 
							<form method="POST" action="../controler/liste_joueur.php ">
								<input type="hidden" name="Real">
                          	<input style=" border-radius: 40px;width: 5cm; height:1.5cm;"  type="submit" name="envoyer" value="Real"></form><br><br>
							<form method="POST" action="../controler/liste_joueur.php ">
								<input type="hidden" name="Barcelone">
                          	<input style=" border-radius: 40px;width: 5cm; height:1.5cm;"  type="submit" name="envoyer" value="Barcelone"></form><br><br>
							<form method="POST" action="../controler/liste_joueur.php ">
								<input type="hidden" name="Chelsea">
                          	<input style=" border-radius: 40px;width: 5cm; height:1.5cm;"  type="submit" name="envoyer" value="Chelsea"></form><br><br>
							
							
							
						</div>
						<div class="col-10">
							<div class="container-login100" style="background-image: url('../assets/IMAGE/messi_ronaldo.jpg');">
									<div class="wrap-login100 p-t-190 p-b-30">
											<form  method="POST" action="../controler/ajou_joueur.php" enctype="multipart/form-data">
					

					
						<input  type="file" name="avatar" >
						
					

					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="nom" placeholder="nom du joueur">
						
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="prenom" placeholder="prenom du joueur">
						
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="age" placeholder="age du joueur">
						
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="nationalité" placeholder="nationalité du joueur">
						
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<input class="input100" type="text" name="poste" placeholder="poste du joueur">
						
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "champ obligatoire">
						<select class="input100" name="id_ekip[]">
								<option value="1" style="font-family: serif;"><b>1-barcelone</b></option>
								<option value="2"><b>2-juventus</b></option>
								<option style="font-family: serif;" value="3"><b>3-réal</b></option>
								<option style="font-family: serif;" value="4"><b>4-chelsea</b></option>
								
						</select>

						
					</div>
					

					<div class="container-login100-form-btn p-t-10">
						<input style="background-color: indigo; color: white; border-radius: 40px;width: 10cm; height:1.5cm;"  type="submit" name="envoyer" value="valider">
					</div>


                     </form>
										
				
			                       </div>
			                </div>
			            </div>
		        </div>
	
		
		
				
						
	
	
			
			
	
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>