<?php 

session_start();

header('Content-type: charset = UTF-8');
if (isset($_POST['Barcelone'])) {
	$id=1;
	# code...
}
if (isset($_POST['Real'])) {
	$id=3;
	# code...
}
if (isset($_POST['Chelsea'])) {
	$id=4;
	# code...
}
if (isset($_POST['Juventus'])) {
	$id=2;
	# code...
}


	if (!empty($id)) {
		# code...
	
	
	$_SESSION['liste_joueur']='' ;

   require_once 'init.php';

   $bd = new base_donnee("club", "127.0.0.1", "root", "");
   $connecteur= $bd->connect();

   $joueurDao=new joueurDAO($connecteur);
   try {
   	     $joueur=$joueurDao->liste_joueur($id);

	} catch (Exception $e) {
   		die('Erreur : '.$e->getMessage());
	}
	if (empty($joueur)) {
		$_SESSION['typeErreur'] = 'echec liste';
		$_SESSION['messageInfo'] = 'pas de liste';
		echo "Erreur";
	}
	else{    
		     $_SESSION['liste_joueur'] = $joueur;
		     
				header('location:../templates/liste_joueur.php');
				
		}
	
	}
	else{
		echo "erreur";
	}	
	


?>