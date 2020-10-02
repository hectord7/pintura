<?php

require_once "controlpanel/models/conexion.php";

class GaleriaModels{

	public function listarServicioModel($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title FROM $tabla ORDER BY serv_id");
		$stmt -> execute();
		
		return $stmt -> fetchAll();
		$stmt -> close();
	}
	
	public function listarGaleriaModel($dato, $tabla1, $tabla2){
		
		$stmt = Conexion::conectar()->prepare("SELECT g.galle_id, g.galle_route, s.serv_title FROM $tabla1 g, $tabla2 s WHERE g.serv_id = s.serv_id AND s.serv_id = :id");
		$stmt -> bindParam(":id", $dato, PDO::PARAM_INT);
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}
}