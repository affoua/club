<?php 
session_start();
header('Content-Type: text/plain');


	
	
	$nom=$_POST['nom']; 
	$prenom=$_POST['prenom']; 
	$age=$_POST['age'];
	$nationalité=$_POST['nationalité'];
	$poste=$_POST['poste']; 
	
	$path=$_FILES['avatar'];
	$id_ekip=$_POST['id_ekip'];


    foreach ($id_ekip as $key) {
		if ($key == 1) {
			$id = 1;
		}
		if ($key == 2) {
			$id = 2;
		}
		if ($key == 3) {
			$id =3;
		}
		if ($key == 4) {
			$id = 4;
		}
		
	
	
		
	}


	$_SESSION['joueur']='' ;


   

    if (!empty($_FILES) )
{
	
	$ext=(substr($path['name'],-3));

	$alow_ext=array("jpg","png","gif");
	if(in_array($ext,$alow_ext))
	{
		move_uploaded_file($path['tmp_name'], "../images/".$path['name']);

		$img=$path['name'];
		$chemin="../images/";
		$paths=$chemin.$img;


        
   		require_once 'init.php';
   		$bd = new base_donnee("club", "127.0.0.1", "root", "");

   	  $connecteur= $bd->connect();

   		$joueurDao=new joueurDAO($connecteur);
	try{ 
   		 $joueur=$joueurDao->ajouter_joueur($nom, $prenom, $age,$nationalité,$poste,$paths,$id); 

	
	} catch (Exception $e) {
   		die('Erreur : '.$e->getMessage());
	}
	if (empty($joueur)) 
	{
		$_SESSION['typeEchec'] = 'échec ajout';
		$_SESSION['messageInfo'] = 'ajout echoué' ;
		//header('location:../Login_v12/accueil.php');
           
		

	} else 
	{
		$_SESSION['typeEchec'] = 'ajout effectué';
		$_SESSION['messageInfo'] = 'Ajout effectué avec succes';
		header('location:../Login_v12/accueil.php');
		
		}
	
   	}
   	




	}
	else{
		$erreur="votre fichier n'est pas une image";
	}
	

	

 ?>