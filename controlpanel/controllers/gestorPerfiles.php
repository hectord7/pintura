<?php 

class GestorPerfiles{
	
	public function editarPerfilController(){

		$ruta = "";

		if(isset($_POST["editarUsuario"])){

			if(isset($_FILES["editarImagen"]["tmp_name"])){

				$imagen = $_FILES["editarImagen"]["tmp_name"];
				$aleatorio = mt_rand(100, 999);
				$ruta = "views/images/perfiles/perfil".$aleatorio.".jpg";

				$origen = imagecreatefromjpeg($imagen);
				$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>100, "height"=>100]);
				imagejpeg($destino, $ruta);

			}

			if($ruta == ""){
				$ruta = $_POST["editarPhoto"];	
			}

			if($ruta != "" && $_POST["editarPhoto"] != "views/images/photo.jpg"){
				unlink($_POST["editarPhoto"]);
			}

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarUsuario"])&&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["editarEmail"])){
			   	
			   	include_once 'encrypter.php';
			   	
			   	$encriptar = Encrypter::encrypt($_POST["editarPassword"]);

			   	$datosController = array("id" => $_POST["idPerfil"],
			   							 "usuario" => $_POST["editarUsuario"],
										 "password" => $encriptar,
										 "email" => $_POST["editarEmail"],
										 "rol" => $_POST["editarRol"],
										 "photo" => $ruta);

			   	$respuesta = GestorPerfilesModel::editarPerfilModel($datosController, "user");

			   	if($respuesta == "ok"){

			   		if(isset($_POST["actualizarSesion"])){
			   			$_SESSION["usuario"] = $_POST["editarUsuario"];
						$_SESSION["password"] = $encriptar;
						$_SESSION["email"] = $_POST["editarEmail"];
						$_SESSION["photo"] = $ruta;
			   		}		   		

					echo'<script>
							swal({
								  title: "¡OK!",
								  text: "¡The user has been edited correctly!",
								  type: "success",
								  confirmButtonText: "Close",
								  closeOnConfirm: false
							},

							function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "perfil";
								  } 
							});
						</script>';
				}
			}
			else{
				echo '<div class="alert alert-warning"><b>¡ERROR!</b> Do not enter special characters</div>';
			}
		}
	}

	
	
}