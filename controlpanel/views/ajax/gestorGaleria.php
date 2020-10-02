<?php 

require_once "../../controllers/gestorGaleria.php";
require_once "../../models/gestorGaleria.php";

class Ajax{
	
	public $imagenTemporal;
	public $idGaleria;
	public $rutaGaleria;
	public $actualizarOrdenGaleria;
	public $actualizarOrdenItem;

	public function gestorGaleriaAjax(){

		$datos = $this->imagenTemporal;
		$respuesta = GestorGaleria::mostrarImagenController($datos);
		echo $respuesta;
	}

	public function eliminarGaleriaAjax(){

		$datos = array('idGaleria' => $this->idGaleria, 
					   'rutaGaleria' => $this->rutaGaleria);

		$respuesta = GestorGaleria::eliminarGaleriaController($datos);
		echo $respuesta;
	}

	public function actualizarOrdenAjax(){
	
		$datos = array("ordenGaleria" => $this->actualizarOrdenGaleria,
			           "ordenItem" => $this->actualizarOrdenItem);

		$respuesta = GestorGaleria::actualizarOrdenController($datos);
		echo $respuesta;
	}	
}

if (isset($_FILES["imagen"]["tmp_name"])) {
	$a = new Ajax();
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
	$a -> gestorGaleriaAjax();
}

if (isset($_POST["idGaleria"])){
	$b = new Ajax();
	$b -> idGaleria = $_POST["idGaleria"];
	$b -> rutaGaleria = $_POST["rutaGaleria"];
	$b -> eliminarGaleriaAjax();
}

if(isset($_POST["actualizarOrdenGaleria"])){
	$c = new Ajax();
	$c -> actualizarOrdenGaleria = $_POST["actualizarOrdenGaleria"];
	$c -> actualizarOrdenItem = $_POST["actualizarOrdenItem"];
	$c -> actualizarOrdenAjax();
}