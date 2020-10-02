<?php 

require_once "controlpanel/models/conexion.php";

class VideoModel{
	
	public function seleccionarVideosModel($tabla, $inicio, $cantidadMostrar){

		/*$stmt = Conexion::conectar()->prepare("SELECT vid_route FROM $tabla ORDER BY vid_order ASC");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();*/
		$stmt = Conexion::conectar()->prepare("SELECT vid_route FROM $tabla ORDER BY vid_order ASC LIMIT $inicio, $cantidadMostrar");	
		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
	
	public function listarVideosModel($tabla){
	    
	    $stmt = Conexion::conectar()->prepare("SELECT vid_route FROM $tabla ORDER BY vid_order ASC");
	    $stmt -> execute();
	    
	    return $stmt -> fetchAll();
	    $stmt -> close();
	}
} 
