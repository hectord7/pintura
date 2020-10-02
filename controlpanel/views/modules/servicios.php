<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";

?>
<!--=====================================
SERVICIOS ADMINISTRABLE          
======================================-->

<div id="seccionServicios" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
	
	<button id="btnAgregarServicio" class="btn btn-info btn-lg" style="background-color: black;color: #eabe12; border: 2px solid #eabe12;">Add Service</button>

	<!--==== AGREGAR SERVICIO  ====-->

	<div id="agregarServicio" style="display:none">
		
		<form method="post" enctype="multipart/form-data">

			<input name="tituloServicio" type="text" placeholder="Title of Service" class="form-control" required>

			<textarea name="introServicio" id="" cols="30" rows="5" placeholder="Introduction of the Service" class="form-control"  maxlength="170" required></textarea>

			<input type="file" name="imagen" class="btn btn-default" id="subirFoto" required>

			<p>Recommended size: 800px * 400px, maximum weight 2MB and the format of the image must be jpg</p>

			<div id="arrastreImagenServicio">	
				
			</div>

			<textarea name="contenidoServicio" id="" cols="30" rows="10" placeholder="Content of the Service" class="form-control" required></textarea>

			<input type="submit" id="guardarServicio" value="Save service" style="background-color: black;color: #eabe12; border: 2px solid #eabe12;" class="btn btn-primary">

		</form>

	</div>

	<?php

		$crearServicio = new GestorServicios();
		$crearServicio -> guardarServicioController();

	?>

	<hr>

	<!--==== EDITAR SERVICIO  ====-->

	<ul id="editarServicio">

	<?php

		$mostrarServicio = new GestorServicios();
		$mostrarServicio -> mostrarServiciosController();
		$mostrarServicio -> borrarServicioController();
		$mostrarServicio -> editarServicioController();

	?>

	</ul>
	
</div>

<!--====  Fin de SERVICIOS ADMINISTRABLE  ====-->

