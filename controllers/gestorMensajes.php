<?php

class MensajesController{
	
	public function registroMensajeController(){

		if(isset($_POST["nombre"])){
			if(preg_match('/^[a-zA-Z\s]+$/', $_POST["nombre"]) && preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) && preg_match('/^[a-zA-Z0-9\s\.,¿?¡!]+$/', $_POST["mensaje"])){

				# Enviar correo electrónico
				# mail(correo destino,  asunto, mensaje, cabecera del correo)
				$correoDestino = "estimatesfcdaniels@gmail.com";
				$asunto = "Mensaje de la web";
				$mensaje = "Nombre: ".$_POST["nombre"]."\n"."Email: ".$_POST["email"]."\n"."Mensaje: ".$_POST["mensaje"]."\n"."\n";
				$cabecera = "From: sitio web" . "\r\n" . "CC:".$_POST["email"];				
				$envio = mail($correoDestino, $asunto, $mensaje, $cabecera);

				# Almacenar en la BD el mensaje
				$datosController = array('nombre' => $_POST["nombre"], 
										 'email' => $_POST["email"],
										 'mensaje' => $_POST["mensaje"]);
				$respuesta = MensajesModel::registroMensajeModel($datosController, "message"); 

				# Almacenar en la BD el suscriptor	
				$datosSuscriptor = $_POST["email"];
				$revisarSuscriptor = MensajesModel::revisarSuscriptorModel($datosSuscriptor, "subscriber");

				if(count($revisarSuscriptor["subs_email"]) == 0){ 
					MensajesModel::registroSuscriptorModel($datosController, "subscriber");
				}

				if($envio == true && $respuesta == "ok"){
					echo '<script>
						swal({
							title: "¡OK!",
							text: "¡The message has been sent correctly!",
							type: "success",
							confirmButtonText: "Close",
							closeOnConfirm: false
							},

							function(isConfirm){
								if (isConfirm){
									window.location = "index.php";
								}
						});
				      </script>';
				} 
			} else{
				echo '<div class="alert alert-warning">¡The message can not be sent, special characters are not allowed.</div>';
			}
		}
	}
}