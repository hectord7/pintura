<?php

require_once "conexion.php";

class GestorGaleriaModel{

	#SUBIR LA RUTA DE LA IMAGEN
	#------------------------------------------------------------
	// public function subirImagenGaleriaModel($datos, $tabla){

	// 	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (galle_route) VALUES (:ruta)");
	// 	$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);

	// 	if($stmt->execute()){
	// 		return "ok";
	// 	}
	// 	else{
	// 		return "error";
	// 	}
	// 	$stmt->close();
	// }

	#SELECCIONAR LA RUTA DE LA IMAGEN
	#------------------------------------------------------------
	// public function mostrarImagenGaleriaModel($datos, $tabla){

	// 	$stmt = Conexion::conectar()->prepare("SELECT galle_route FROM $tabla WHERE galle_route = :ruta");
	// 	$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);
	// 	$stmt -> execute();

	// 	return $stmt -> fetch();
	// 	$stmt -> close();
	// }

	#MOSTRAR IMAGEN EN LA VISTA
	#---------------------------------------------------------
	public function mostrarImagenVistaModel($tabla1, $tabla2, $id){

		$stmt = Conexion::conectar()->prepare("SELECT g.galle_id, g.galle_route, s.serv_title FROM $tabla1 g, $tabla2 s WHERE g.serv_id = s.serv_id AND s.serv_id = :id");
		$stmt -> bindParam(":id", $id, PDO::PARAM_INT);
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	#ELIMINAR ITEM DE LA GALERIA
	#-----------------------------------------------------------

	// public function eliminarGaleriaModel($datos, $tabla){

	// 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE galle_id = :id");
	// 	$stmt -> bindParam(":id", $datos["idGaleria"], PDO::PARAM_INT);

	// 	if($stmt->execute()){
	// 		return "ok";
	// 	}
	// 	else{
	// 		return "error";
	// 	}
	// 	$stmt->close();
	// }
	
	public function eliminarGaleriaServicioModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE galle_id = :id");
		$stmt -> bindParam(":id", $datos["idGaleria"], PDO::PARAM_INT);

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

	// public function actualizarOrdenModel($datos, $tabla){

	// 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET galle_order = :orden WHERE galle_id = :id");
	// 	$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_INT);
	// 	$stmt -> bindParam(":id", $datos["ordenGaleria"], PDO::PARAM_INT);

	// 	if($stmt -> execute()){
	// 		return "ok";
	// 	}
	// 	else{
	// 		return "error";
	// 	}
	// 	$stmt -> close();
	// }

	#SELECCIONAR ORDEN 
	#---------------------------------------------------

	public function seleccionarOrdenModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT galle_id, galle_route FROM $tabla ORDER BY galle_order ASC");
		$stmt -> execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
	
	#Sección nueva para agregar imagenes al servicio
	#-------------------------------------------------
	public function listarServiciosModel($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title FROM $tabla ORDER BY serv_id");
		$stmt -> execute();
		
		return $stmt -> fetchAll();
		$stmt -> close();
	}
	
	#GUARDAR IMAGEN AL SERVICIO
	#------------------------------------------------------------

	public function guardarImagenServicioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (galle_route, serv_id) VALUES (:ruta, :id)");
		$stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["servicio"], PDO::PARAM_INT);
		
		if($stmt -> execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#MOSTRAR IMAGEN CON LOS SERVICIOS
	#------------------------------------------------------
	// public function mostrarServiciosModel($tabla){

	// 	$stmt = Conexion::conectar()->prepare("SELECT serv_id, serv_title, serv_introduction, serv_route, serv_content FROM $tabla ORDER BY serv_id ASC");
	// 	$stmt -> execute();

	// 	return $stmt -> fetchAll();
	// 	$stmt -> close();
	// }
}