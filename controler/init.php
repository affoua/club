<?php
      /*ce fichier va se charger d'autocharger la classe qu'on aura  appelée dans un fichier. il faut donc inclure ce fichier dans ce fichier. puis on pourra faire par exemple, user=new Admin_class(). user deviendra objet de type Admin_class
       */

      	// il permettra de charger les classes situé dans le model

	
	spl_autoload_register(function($classe)  
 	{
		if(file_exists("{$classe}.php"))	
		{
			require_once "{$classe}.php";
   		}
	   		
elseif (file_exists("../model/classeDao/{$classe}.php")) 
	   		{
	   		
	require_once "../model/classeDao/{$classe}.php";
	   		}
	   	
	elseif (file_exists("../model/classeMetier/{$classe}.php")) 
	   		
{
	   			require_once "../model/classeMetier/{$classe}.php";
	   		}

			elseif (file_exists("../model/interfaceMetier/{$classe}.php")) 
	   		
{
	   			require_once "../model/interfaceMetier/{$classe}.php";
	   		}
	   
		elseif (file_exists("../model/import/{$classe}.php")) 
	   		
{
	   			require_once "../model/import/{$classe}.php";
	   		}
	   		
elseif (file_exists("../model/{$classe}.php")) 
	   		{
	   			require_once "../model/{$classe}.php";
	   		}
	   		elseif (file_exists("../../model/classeMetier/{$classe}.php")) 
	   		{
	   			require_once "../../model/classeMetier/{$classe}.php";
	   		}	   			   		
	   	});
 