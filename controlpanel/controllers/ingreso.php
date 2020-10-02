<?php
session_start();

class Ingreso{

	public function ingresoController(){

		if(isset($_POST["usuarioIngreso"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"])&&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordIngreso"])){
			   	
			   	include 'encrypter.php';
				/* $encriptar = Encrypter::encrypt($_POST["password_ingreso"]); */
				$encriptar = $_POST["passwordIngreso"];

			   	$datosController = array("usuario"=> $_POST["usuarioIngreso"],
				                    	 "password"=> $encriptar);
				
				$respuesta = IngresoModels::ingresoModel($datosController, "user");
				
				$intentos = $respuesta["user_try"];
				$usuarioActual = $_POST["usuarioIngreso"];
				$maximoIntentos = 2;

				if($intentos < $maximoIntentos){

					if($respuesta["user_user"] == $_POST["usuarioIngreso"] && $respuesta["user_password"] == $encriptar){

						$intentos = 0;
						$datosControllers = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosControllers, "user");
						
						
						$_SESSION["validar"] = true;
						$_SESSION["nombre"] = $respuesta["user_name"];
						$_SESSION["usuario"] = $respuesta["user_user"];
						$_SESSION["id"] = $respuesta["user_id"];
						$_SESSION["password"] = $respuesta["user_password"];
						$_SESSION["email"] = $respuesta["user_email"];
						$_SESSION["photo"] = $respuesta["user_photo"];
						
						// echo "<script language='javascript'>
					 //   		location= 'inicio'
				  //  		</script>";
						header('location: inicio');
					}
					else{
						++$intentos;
						$datosControllers = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosControllers, "user");
						echo '<div class="alert alert-danger">Error when entering</div>';
					}
				}
				else{

						$intentos = 0;
						$datosController = array("usuarioActual"=>$usuarioActual, "actualizarIntentos"=>$intentos);

						$respuestaActualizarIntentos = IngresoModels::intentosModel($datosController, "user");
						echo '<div class="alert alert-danger">Has failed 3 times, prove that it is not a robot</div>';

				}
			}
		}
	}
}