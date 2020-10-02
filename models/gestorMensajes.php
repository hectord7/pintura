<?php 
require_once "controlpanel/models/conexion.php";

class MensajesModel{
	
	public function registroMensajeModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (msg_name, msg_email, msg_message) VALUES (:nombre, :email, :mensaje)");
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);

		if($stmt -> execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt -> close();
	}

	public function registroSuscriptorModel($datos, $tabla){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (subs_name, subs_email) VALUES (:nombre, :email)");
		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);		

		if($stmt -> execute()){
			return "ok";
		} else {
			return "error";
		}
		$stmt -> close();
	}

	public function revisarSuscriptorModel($datos, $tabla){
		$stmt = Conexion::conectar()->prepare("SELECT subs_email FROM $tabla WHERE subs_email = :email");		
		$stmt -> bindParam(":email", $datos, PDO::PARAM_STR);		

		$stmt -> execute();

		return $stmt -> fetch();		
		$stmt -> close();
	}
}