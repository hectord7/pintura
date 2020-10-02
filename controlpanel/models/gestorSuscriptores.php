<?php

require_once "conexion.php";

class SuscriptoresModel{

	public function mostrarSuscriptoresModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT subs_id, subs_name, subs_email FROM $tabla");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}
	
	public function borrarSuscriptoresModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE subs_id = :id");
		$stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	public function suscriptoresSinRevisarModel($tabla){
		
		$stmt = Conexion::conectar()->prepare("SELECT subs_review FROM $tabla");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	public function suscriptoresRevisadosModel($datos, $tabla){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET subs_review = :revision");
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


