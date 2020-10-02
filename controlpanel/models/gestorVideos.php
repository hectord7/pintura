<?php 

require_once "conexion.php";

class GestorVideosModel{
	
	public function subirVideoModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (vid_route) VALUES (:ruta)");
		$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		} else{
			return "error";
		}
		$stmt->close();
	}
	
	public function mostrarVideoModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT vid_route FROM $tabla WHERE vid_route = :ruta");
		$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetch();
		$stmt -> close();
	}

	public function mostrarVideoVistaModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT vid_id, vid_route FROM $tabla ORDER BY vid_order ASC");		
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	public function eliminarVideoModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE vid_id = :id");
		$stmt -> bindParam(":id", $datos["idVideo"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		} else{
			return "error";
		}
		$stmt->close();
	}

	public function actualizarOrdenModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET vid_order = :orden WHERE vid_id = :id");
		$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_INT);
		$stmt -> bindParam(":id", $datos["ordenVideo"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		} else{
			return "error";
		}
		$stmt->close();
	}

	public function seleccionarOrdenModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT vid_id, vid_route FROM $tabla ORDER BY vid_order ASC");		
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}
}