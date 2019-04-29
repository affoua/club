<?php 

class joueurDAO
	{
		private $bd;


	function __construct($bdvar)
	{
	 $this->setbd($bdvar);
 
	}
	public function setbd(PDO $bdvar)
	{

	 $this->bd = $bdvar;
	}

	public function ajouter_joueur($nom,$prenoms,$age,$nationalite,$poste,$image,$id_ekip)
	{
		$requete = $this->bd->prepare('INSERT INTO joueur(id_joueur,nom,prenoms,age,nationalite,poste,image,id_ekip) VALUES("",?,?,?,?,?,?,?)');
		try{
			$requete->execute(array($nom,$prenoms,$age,$nationalite,$poste,$image,$id_ekip));
			$resultat='succes';
			return $resultat;
		}catch(Exception $e){
			die("Erreur: " .$e->getMessage());
		}
		$resultat='';
		return $resultat;
	}



	 
	 public function liste_joueur($id)
	{
		$requete = $this->bd->prepare('SELECT * FROM joueur where id_ekip = ?  ');
		
			try{
	 		$requete->execute(array($id));
	 		 $resultat = $requete->fetchAll();
	 		return $resultat;

	 	}catch(Exception $e){
			echo "Erreur: " .$e->getMessage();
		}
		$resultat='';
	 		return $resultat;
		    
	}

	
		    
	}



 ?>