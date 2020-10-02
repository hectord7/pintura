<?php

class EnlacesModels{

	public function enlacesModel($enlaces){

		if($enlaces == "inicio" ||
		   $enlaces == "ingreso" ||
		   $enlaces == "slide" ||
		   $enlaces == "servicios" ||
		   $enlaces == "galeria" ||
		   $enlaces == "info" ||
		   $enlaces == "suscriptores" ||
		   $enlaces == "mensajes" ||
		   $enlaces == "perfil" ||
		   $enlaces == "videos" ||
		   $enlaces == "salir"){

			$module = "views/modules/".$enlaces.".php";
		}	

		else if($enlaces == "index"){
			$module = "views/modules/ingreso.php";
		}

		else{
			$module = "views/modules/ingreso.php";		
		}

		return $module;

	}


}