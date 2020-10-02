<?php

require_once "../../controllers/gestorGaleria.php";
require_once "../../models/gestorGaleria.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

	#SUBIR LA IMAGEN PERTENECIENTE AL SERVICIO
	#----------------------------------------------------------
	
	public $imagenTemporal;

	public function gestorGaleriaServiciosAjax(){

		$datos = $this->imagenTemporal;
		$respuesta = GestorGaleria::mostrarImagenServicioController($datos);
		echo $respuesta;
	}
	
	#ELIMINAR LA IMAGEN
	#----------------------------------------------------------
	
	public $idGaleria;
	public $rutaGaleria;
	
	public function eliminarGaleriaServicioAjax(){

		$datos = array('idGaleria' => $this->idGaleria, 
					   'rutaGaleria' => $this->rutaGaleria);

		$respuesta = GestorGaleria::eliminarGaleriaServicioController($datos);
		echo $respuesta;
	}
}

#OBJETOS
#-----------------------------------------------------------
if(isset($_FILES["imagen"]["tmp_name"])){
	$a = new Ajax();
	$a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
	$a -> gestorGaleriaServiciosAjax();
}

if (isset($_POST["idGaleria"])){
	$b = new Ajax();
	$b -> idGaleria = $_POST["idGaleria"];
	$b -> rutaGaleria = $_POST["rutaGaleria"];
	$b -> eliminarGaleriaServicioAjax();

}

