<?php 

require_once "controlpanel/models/conexion.php";

class ServiciosModel{
	
	public function seleccionarServiciosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title, serv_introduction, serv_route, serv_content FROM $tabla ORDER BY serv_id ASC ");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}
}