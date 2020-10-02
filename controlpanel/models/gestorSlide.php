<?php

require_once "conexion.php";

class GestorSlideModel{

	#SUBIR LA RUTA DE LA IMAGEN
	#------------------------------------------------------------

	public function subirImagenSlideModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (slide_route) VALUES (:ruta)");
		$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#SELECCIONAR LA RUTA DE LA IMAGEN
	#------------------------------------------------------------

	public function mostrarImagenSlideModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT slide_route, slide_title, slide_description FROM $tabla WHERE slide_route = :ruta");
		$stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetch();
		$stmt -> close();
	}

	#MOSTRAR IMAGEN EN LA VISTA
	#---------------------------------------------------------
	public function mostrarImagenVistaModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT slide_id, slide_route, slide_title, slide_description FROM $tabla ORDER BY slide_order ASC");
		$stmt -> execute();

		return $stmt -> fetchAll();
		$stmt -> close();
	}

	#ELIMINAR ITEM DEL SLIDE
	#-----------------------------------------------------------

	public function eliminarSlideModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE slide_id = :id");
		$stmt -> bindParam(":id", $datos["idSlide"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();
	}

	#ACTUALIZAR ITEM DEL SLIDE
	#-----------------------------------------------------------
	public function actualizarSlideModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET slide_title = :titulo, slide_description = :descripcion WHERE slide_id = :id");

		$stmt -> bindParam(":titulo", $datos["enviarTitulo"], PDO::PARAM_STR);
		$stmt -> bindParam(":descripcion", $datos["enviarDescripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["enviarId"], PDO::PARAM_INT);

		if($stmt->execute()){
			return "ok";
		}
		else{
			return "error";
		}
		$stmt->close();

	}

	#SELECCIONAR ITEM DEL SLIDE
	#-----------------------------------------------------------

	public function seleccionarActualizacionSlideModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT slide_title, slide_description FROM $tabla WHERE slide_id = :id");
		$stmt -> bindParam(":id", $datos["enviarId"], PDO::PARAM_INT);
		$stmt -> execute();

		return $stmt -> fetch();
		$stmt -> close();
	}

	#ACTUALIZAR ORDEN 
	#---------------------------------------------------

	public function actualizarOrdenModel($datos, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET slide_order = :orden WHERE slide_id = :id");
		$stmt -> bindParam(":orden", $datos["ordenItem"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["ordenSlide"], PDO::PARAM_INT);

		if($stmt -> execute()){
			return "ok";
		}
		else{
			return "error";
		}
		
		$stmt -> close();
	}

		#SELECCIONAR ORDEN 
	#---------------------------------------------------

	public function seleccionarOrdenModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT slide_id, slide_route, slide_title, slide_description FROM $tabla ORDER BY orden ASC");
		$stmt -> execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
}