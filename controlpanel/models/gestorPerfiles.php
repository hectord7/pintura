<?php 

require_once "conexion.php";

class GestorPerfilesModel{
	
	public function editarPerfilModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET user_user = :usuario, user_password = :password, user_email = :email, user_photo = :photo WHERE user_id = :id");	

		$stmt -> bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":photo", $datosModel["photo"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}
}
