<?php 

class GestorVideos{
	
	public function mostrarVideoController($datos){
		
		$aleatorio = mt_rand(100, 999);
		$ruta = "../../views/videos/video".$aleatorio.".mp4";
		move_uploaded_file($datos, $ruta);

		GestorVideosModel::subirVideoModel($ruta, "videos");

		$respuesta = GestorVideosModel::mostrarVideoModel($ruta, "videos");

		$enviarDatos = $respuesta["vid_route"];

		echo $enviarDatos;
	}

	public function mostrarVideoVistaController(){

		$respuesta = GestorVideosModel::mostrarVideoVistaModel("videos");

		foreach ($respuesta as $row => $item) {
			echo '<li id="'.$item["vid_id"].'" class="bloqueVideo">
					<span class="fa fa-times eliminarVideo" ruta="'.$item["vid_route"].'"></span>
					<video controls class="handleVideo">
						<source src="'.substr($item["vid_route"], 6).'" type="video/mp4">
						</video>	
				</li>';
		}
	}

	public function eliminarVideoController($datos){

		$respuesta = GestorVideosModel::eliminarVideoModel($datos, "videos");
		unlink($datos["rutaVideo"]);

		echo $respuesta;
	}

	public function actualizarOrdenController($datos){

		GestorVideosModel::actualizarOrdenModel($datos, "videos");

		$respuesta = GestorVideosModel::seleccionarOrdenModel("videos");

		foreach ($respuesta as $row => $item) {
			echo '<li id="'.$item["vid_id"].'" class="bloqueVideo">
					<span class="fa fa-times eliminarVideo" ruta="'.$item["vid_route"].'"></span>
					<video controls class="handleVideo">
						<source src="'.substr($item["vid_route"], 6).'" type="video/mp4">
						</video>	
				</li>';
		}
	}
}