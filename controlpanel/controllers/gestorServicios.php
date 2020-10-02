<?php

class GestorServicios{

	#MOSTRAR IMAGEN SERVICIOS
	#------------------------------------------------------------
	public function mostrarImagenController($datos){

		list($ancho, $alto) = getimagesize($datos);

		if($ancho < 800 || $alto < 400){
			echo 0;
		}

		else{
			$aleatorio = mt_rand(100, 999);
			$ruta = "../../views/images/servicios/temp/servicio".$aleatorio.".jpg";
			$origen = imagecreatefromjpeg($datos);
			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);
			imagejpeg($destino, $ruta);

			echo $ruta;
		}
	}

	#GUARDAR SERVICIOS
	#-----------------------------------------------------------

	public function guardarServicioController(){

		if(isset($_POST["tituloServicio"])){

			$imagen = $_FILES["imagen"]["tmp_name"];
			$borrar = glob("views/images/servicios/temp/*");

			foreach($borrar as $file){
				unlink($file);
			}

			$aleatorio = mt_rand(100, 999);
			$ruta = "views/images/servicios/servicio".$aleatorio.".jpg";
			$origen = imagecreatefromjpeg($imagen);
			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);
			imagejpeg($destino, $ruta);

			$datosController = array("titulo" => $_POST["tituloServicio"],
				                     "introduccion" => $_POST["introServicio"]."...",
			 	                     "ruta" => $ruta,
			 	                     "contenido" => $_POST["contenidoServicio"]);
			 	                     
			$respuesta = GestorServiciosModel::guardarServicioModel($datosController, "service");
			
			if($respuesta == "ok"){
				echo'<script>
					swal({
						  title: "¡OK!",
						  text: "¡The service has been created correctly!",
						  type: "success",
						  confirmButtonText: "Close",
						  closeOnConfirm: false
					},
					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "servicios";
							  } 
					});
				</script>';
			}
			else{
				echo $respuesta;
			}
		}
	}

	#MOSTRAR SERVICIOS
	#-----------------------------------------------------------

	public function mostrarServiciosController(){

		$respuesta = GestorServiciosModel::mostrarServiciosModel("service");
		
		foreach($respuesta as $row => $item) {

			echo ' <li id="'.$item["serv_id"].'" class="bloqueServicio">
					<span class="handleArticle" style="background-color: black">
					<a href="index.php?action=servicios&idBorrar='.$item["serv_id"].'&rutaImagen='.$item["serv_route"].'">
						<i class="fa fa-times btn btn-danger"></i>
					</a>
					<i class="fa fa-pencil btn btn-primary editarServicio"></i>	
					</span>
					<img src="'.$item["serv_route"].'" class="img-thumbnail">
					<h1>'.ucwords($item["serv_title"]).'</h1>
					<p>'.$item["serv_introduction"].'</p>
					<input type="hidden" value="'.$item["serv_content"].'">
					<a href="#servicio'.$item["serv_id"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>
					<hr>
				</li>
				<div id="servicio'.$item["serv_id"].'" class="modal fade">
					<div class="modal-dialog modal-content">
						<div class="modal-header" style="border:1px solid #eee">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h3 class="modal-title">'.$item["serv_title"].'</h3>
						</div>
						<div class="modal-body" style="border:1px solid #eee">
							<img src="'.$item["serv_route"].'" width="100%" style="margin-bottom:20px">
							<p class="parrafoContenido">'.$item["serv_content"].'</p>
						</div>
						<div class="modal-footer" style="border:1px solid #eee">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>';
		}
	}

	#BORRAR SERVICIO
	#------------------------------------

	public function borrarServicioController(){

		if(isset($_GET["idBorrar"])){

			unlink($_GET["rutaImagen"]);

			$datosController = $_GET["idBorrar"];

			$respuesta = GestorServiciosModel::borrarServicioModel($datosController, "service");

			if($respuesta == "ok"){

					echo'<script>
					swal({
						  title: "¡OK!",
						  text: "¡The service has been successfully deleted!",
						  type: "success",
						  confirmButtonText: "Close",
						  closeOnConfirm: false
					},
					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "servicios";
							  } 
					});
				</script>';
			}
		}
	}

	#ACTUALIZAR SERVICIO
	#-----------------------------------------------------------

	public function editarServicioController(){

		$ruta = "";

		if(isset($_POST["editarTitulo"])){

			if(isset($_FILES["editarImagen"]["tmp_name"])){	

				$imagen = $_FILES["editarImagen"]["tmp_name"];

				$aleatorio = mt_rand(100, 999);
				$ruta = "views/images/servicios/servicio".$aleatorio.".jpg";
				$origen = imagecreatefromjpeg($imagen);
				$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>800, "height"=>400]);
				imagejpeg($destino, $ruta);
				$borrar = glob("views/images/servicios/temp/*");

				foreach($borrar as $file){
					unlink($file);
				}
			}

			if($ruta == ""){
				$ruta = $_POST["fotoAntigua"];
			}
			else{
				unlink($_POST["fotoAntigua"]);
			}

			$datosController = array("id"=>$_POST["id"],
			                         "titulo"=>$_POST["editarTitulo"],
								     "introduccion"=>$_POST["editarIntroduccion"],
								     "ruta"=>$ruta,
								     "contenido"=>$_POST["editarContenido"]);

			$respuesta = GestorServiciosModel::editarServicioModel($datosController, "service");

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡The service has been updated correctly!",
						  type: "success",
						  confirmButtonText: "Close",
						  closeOnConfirm: false
					},
					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "servicios";
							  } 
					});
				</script>';
			}
			else{
				echo $respuesta;
			}
		}
	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------
	public function actualizarOrdenController($datos){

		GestorServiciosModel::actualizarOrdenModel($datos, "service");

		$respuesta = GestorServiciosModel::seleccionarOrdenModel("service");

		foreach($respuesta as $row => $item){

			echo ' <li id="'.$item["serv_id"].'" class="bloqueServicio">
					<span class="handleArticle">
					<a href="index.php?action=servicios&idBorrar='.$item["serv_id"].'&rutaImagen='.$item["serv_route"].'">
						<i class="fa fa-times btn btn-danger"></i>
					</a>
					<i class="fa fa-pencil btn btn-primary editarServicio"></i>	
					</span>
					<img src="'.$item["serv_route"].'" class="img-thumbnail">
					<h1>'.$item["serv_title"].'</h1>
					<p>'.$item["serv_introduction"].'</p>
					<input type="hidden" value="'.$item["serv_content"].'">
					<a href="#Servicio'.$item["serv_id"].'" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>
					<hr>
				</li>

				<div id="servicio'.$item["serv_id"].'" class="modal fade">
					<div class="modal-dialog modal-content">
						<div class="modal-header" style="border:1px solid #eee">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h3 class="modal-title">'.$item["serv_title"].'</h3>
						</div>
						<div class="modal-body" style="border:1px solid #eee">
							<img src="'.$item["serv_route"].'" width="100%" style="margin-bottom:20px">
							<p class="parrafoContenido">'.$item["serv_content"].'</p>
						</div>
						<div class="modal-footer" style="border:1px solid #eee">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>';
		}
	}
}