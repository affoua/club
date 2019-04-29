<?php

class equipeDAO

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

	
	}


 ?>