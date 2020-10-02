<?php

class GestorGaleria{

	#MOSTRAR IMAGEN GALERIA AJAX
	#------------------------------------------------------------
	// public function mostrarImagenController($datos){

	// 	list($ancho, $alto) = getimagesize($datos);

	// 	if($ancho > 1024 || $alto > 768){
	// 		echo 0;
	// 	}
	// 	else{

	// 		$aleatorio = mt_rand(100, 999);
	// 		$ruta = "../../views/images/galeria/galeria".$aleatorio.".jpg";
	// 		$nuevo_ancho = 1024;
	// 		$nuevo_alto = 768;
	// 		$origen = imagecreatefromjpeg($datos);

	// 		#imagecreatetruecolor — Crear una nueva imagen de color verdadero
	// 		$destino = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
			
	// 		#imagecopyresized() - copia una porción de una imagen a otra imagen. 
	// 		#bool imagecopyresized( $destino, $origen, int $destino_x, int $destino_y, int $origen_x, int $origen_y, int $destino_w, int $destino_h, int $origen_w, int $origen_h)
	// 		imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);

	// 		imagejpeg($destino, $ruta);

	// 		GestorGaleriaModel::subirImagenGaleriaModel($ruta, "gallery");

	// 		$respuesta = GestorGaleriaModel::mostrarImagenGaleriaModel($ruta, "gallery");

	// 		echo $respuesta["galle_route"];

	// 	}

	// }

	#MOSTRAR IMAGENES EN LA VISTA
	#------------------------------------------------------------

	public function mostrarImagenVistaController(){
		
		$respuestaServicio = GestorGaleriaModel::listarServiciosModel("service");
		
		foreach($respuestaServicio as $rowServicio => $itemServicio){
			$id = $itemServicio["serv_id"];
			$respuesta = GestorGaleriaModel::mostrarImagenVistaModel("gallery", "service", $id);
			echo '<h2>'.$itemServicio["serv_title"].'</h2>
				  <ul id="lightbox" style="height: auto;">';
			foreach($respuesta as $row => $item){	
				echo '
					<li id="'.$item["galle_id"].'" class="bloqueGaleria">
					<span class="fa fa-times eliminarFoto" ruta="../../'.$item["galle_route"].'"></span>
					<a rel="grupo" href="'.$item["galle_route"].'">
					<img src="'.$item["galle_route"].'" class="handleImg">
					</a>
				</li>';
			}
			echo '</ul>';
		}
	}

	#ELIMINAR ITEM DE LA GALERIA
	#-----------------------------------------------------------
	public function eliminarGaleriaServicioController($datos){

		$respuesta = GestorGaleriaModel::eliminarGaleriaServicioModel($datos, "gallery");
		unlink($datos["rutaGaleria"]);
		echo $respuesta;
	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------
	// public function actualizarOrdenController($datos){

	// 	GestorGaleriaModel::actualizarOrdenModel($datos, "gallery");

	// 	$respuesta = GestorGaleriaModel::seleccionarOrdenModel("gallery");

	// 	foreach($respuesta as $row => $item){

	// 		echo '<li id="'.$item["galle_id"].'" class="bloqueGaleria">
	// 				<span class="fa fa-times eliminarFoto" ruta="'.$item["galle_route"].'"></span>
	// 				<a rel="grupo" href="'.substr($item["galle_route"],6).'">
	// 				<img src="'.substr($item["galle_route"],6).'" class="handleImg">
	// 				</a>
	// 			</li>';
	// 	}
	// }
	
	#Sección nuevo código
	#-------------------------
	public function listarServiciosController(){
		
		$respuesta = GestorGaleriaModel::listarServiciosModel("service");
		
		foreach ($respuesta as $row => $item){
			echo '<option value ="'.$item["serv_id"].'">'.ucwords($item["serv_title"]).'</option>';
		}
	}
	
	#MOSTRAR IMAGEN SERVICIOS
	#------------------------------------------------------------
	public function mostrarImagenServicioController($datos){

		list($ancho, $alto) = getimagesize($datos);

		if($ancho > 1024 || $alto > 768){
			echo 0;
		}
		else{
			$aleatorio = mt_rand(100, 999);
			$ruta = "../../views/images/galeriaservicio/temp/galeria".$aleatorio.".jpg";
			$origen = imagecreatefromjpeg($datos);
			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>$ancho, "height"=>$alto]);
			imagejpeg($destino, $ruta);

			echo $ruta;
		}
	}

	#GUARDAR IMAGEN SERVICIOS
	#-----------------------------------------------------------

	public function guardarImagenServicioController(){
		
		

		if(isset($_POST["servicio"])){

			$imagen = $_FILES["imagen"]["tmp_name"];
			$borrar = glob("views/images/galeriaservicio/temp/*");

			foreach($borrar as $file){
				unlink($file);
			}
			
			list($ancho, $alto) = getimagesize($imagen);

			$aleatorio = mt_rand(100, 999);
			$ruta = "views/images/galeriaservicio/galeria".$aleatorio.".jpg";
			$origen = imagecreatefromjpeg($imagen);
			$destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>$ancho, "height"=>$alto]);
			imagejpeg($destino, $ruta);

			$datosController = array("servicio" => $_POST["servicio"],
			 	                     "ruta" => $ruta);
			 	                     
			$respuesta = GestorGaleriaModel::guardarImagenServicioModel($datosController, "gallery");
			
			if($respuesta == "ok"){
				echo'<script>
					swal({
						  title: "¡OK!",
						  text: "¡The image has been created correctly!",
						  type: "success",
						  confirmButtonText: "Close",
						  closeOnConfirm: false
					},
					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "galeria";
							  } 
					});
				</script>';
			}
			else{
				echo $respuesta;
			}
		}
	}
	
}