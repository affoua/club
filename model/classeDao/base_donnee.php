<?php
/*les gars il s'agit de faire une seul connexion a la base de donne. le fichier base_donnee devra donc etre importé partout ou va etre utiliser la conne
 NB  apres inclusion du fichier, la variable conn pourra etre appelee a l'aide de: global conn et la deposer comme parametre dans les classes dites implementation   
 *  */
class base_donnee
{
	private $_nom_bd;
	private $_ip_serveur;
	private $_user_bd;
	private $_pwd_bd;
	
	function __construct($nom, $ip, $user, $pwd)
	{
		$this->_nom_bd=$nom;
		$this->_ip_serveur=$ip;
		$this->_user_bd=$user;
		$this->_pwd_bd=$pwd;
	}

	public function connect()
	{
		try {
			$conn=new PDO("mysql:dbname=$this->_nom_bd; host=$this->_ip_serveur", $this->_user_bd, $this->_pwd_bd);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		} catch (Exception $e) {
			echo '<script>alert("Connexion échouée")</script>';
			echo '<script>alert("'.$e->getMessage().'")</script>';
		}
		return $conn;
	}
}
