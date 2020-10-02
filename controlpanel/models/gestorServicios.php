<?php

require_once "conexion.php";

class GestorServiciosModel{

	#GUARDAR SERVICIO
	#------------------------------------------------------------

	public function guardarServicioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (serv_title, serv_introduction, serv_route, serv_content) VALUES (:titulo, :introduccion, :ruta, :contenido)");
		$stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":introduccion", $datosModel["introduccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
		
		if($stmt -> execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#MOSTRAR SERVICIO
	#------------------------------------------------------
	public function mostrarServiciosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title, serv_introduction, serv_route, serv_content FROM $tabla ORDER BY serv_id ASC");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	#BORRAR SERVICIOS
	#-----------------------------------------------------
	public function borrarServicioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE serv_id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#ACTUALIZAR SERVICIOS
	#---------------------------------------------------
	public function editarServicioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET serv_title = :titulo, serv_introduction = :introduccion, serv_route = :ruta, serv_content = :contenido WHERE serv_id = :id");	
		$stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":introduccion", $datosModel["introduccion"], PDO::PARAM_STR);
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":contenido", $datosModel["contenido"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------
	public function actualizarOrdenModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET serv_order = :orden WHERE serv_id = :id");
		$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["ordenServicios"], PDO::PARAM_INT);

		if($stmt -> execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt -> close();

	}

	#SELECCIONAR ORDEN 
	#---------------------------------------------------
	public function seleccionarOrdenModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title, serv_introduction, serv_route, serv_content FROM $tabla ORDER BY serv_order ASC");
		$stmt -> execute();

		return $stmt->fetchAll();
		$stmt->close();
	}

}