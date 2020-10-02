<?php

require_once "conexion.php";

class IngresoModels{

	public function ingresoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT user_id, user_name, user_user, user_password, user_email, user_photo, user_try FROM $tabla WHERE user_user = :usuario");
		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetch();
		$stmt -> close();

	}

	public function intentosModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET user_try = :intentos WHERE user_user = :usuario");

		$stmt -> bindParam(":intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
		$stmt -> bindParam(":usuario", $datosModel["usuarioActual"], PDO::PARAM_STR);

		if($stmt -> execute()){
			return "ok";
		}
		else{
			return "error";
		}
	}

}