<?php 

require_once "../../controllers/gestorMensajes.php";
require_once "../../models/gestorMensajes.php";

require_once "../../controllers/gestorSuscriptores.php";
require_once "../../models/gestorSuscriptores.php";

class Ajax{

	public $revisionMensajes;
	public $revisionSuscriptores;

	public function gestorRevisionMensajesAjax(){

		$datos = $this->revisionMensajes;

		$respuesta = MensajesController::mensajesRevisadosController($datos);

		echo $respuesta;

	}

	public function gestorRevisionSuscriptoresAjax(){

		$datos = $this->revisionSuscriptores;

		$respuesta = SuscriptoresController::suscriptoresRevisadosController($datos);

		echo $respuesta;

	}
}

if(isset($_POST["revisionMensajes"])){
	$a = new Ajax();
	$a -> revisionMensajes = $_POST["revisionMensajes"];
	$a -> gestorRevisionMensajesAjax();
}

if(isset($_POST["revisionSuscriptores"])){
	$b = new Ajax();
	$b -> revisionSuscriptores = $_POST["revisionSuscriptores"];
	$b -> gestorRevisionSuscriptoresAjax();
}