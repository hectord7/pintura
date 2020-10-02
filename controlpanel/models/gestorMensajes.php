<?php 

require_once "conexion.php";

class MensajesModel{
	
	public function mostrarMensajesModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT msg_id, msg_name, msg_email, msg_message, msg_date FROM $tabla ORDER BY msg_date DESC");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	public function borrarMensajesModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE msg_id = :id");
		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);
		
		if($stmt -> execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt -> close();
	}

	public function seleccionarEmailSuscriptores($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT subs_name, subs_email FROM $tabla");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	public function mensajesSinRevisarModel($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT msg_review FROM $tabla");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	public function mensajesRevisadosModel($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET msg_review = :revision");
		$stmt -> bindParam(":revision", $datos, PDO::PARAM_INT);
		
		if($stmt -> execute()){
			return "ok";
		}
		else {
			return "error";
		}
		$stmt -> close();
	}
	
}