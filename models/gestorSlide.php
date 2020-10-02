<?php

require_once "controlpanel/models/conexion.php";

class SlideModels{

	public function seleccionarSlideModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT slide_route, slide_title, slide_description FROM $tabla ORDER BY slide_order ASC");
		$stmt->execute();

		return $stmt->fetchAll();
		$stmt->close();
	}
}