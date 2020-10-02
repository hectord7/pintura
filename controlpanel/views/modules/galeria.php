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
GALERIA ADMINISTRABLE          
======================================-->
<!--<div id="galeria" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">-->
	<div id="seccionGalerias" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
		
		<button id="btnAgregarGaleria" class="btn btn-info btn-lg" style="background-color: black;color: #eabe12; border: 2px solid #eabe12;">Add Image to Service</button>
	
		<!--==== AGREGAR GALERIA  ====-->
	
		<div id="agregarGaleria" style="display:none">
			
			<form method="post" enctype="multipart/form-data">
				<select class="form-control" name="servicio" id="servicio" required>
					<option selected disabled hidden value="">Select the service</option>
	  				<?php
						$servicio = new GestorGaleria();
						$servicio -> listarServiciosController();
					?>
				</select>
				<input type="file" name="imagen" class="btn btn-default" id="subirFoto" required>
				<p style="text-align: center;">Recommended size: 1024px * 768px, maximum weight 2MB and the format of the image must be jpg</p>
	
				<div id="arrastreImagenServicio">
				</div>
				<input type="submit" id="guardarServicio" value="Save service" style="background-color: black;color: #eabe12; border: 2px solid #eabe12;" class="btn btn-primary">
			</form>
	
		</div>
		<?php
			$crearServicio = new GestorGaleria();
			$crearServicio -> guardarImagenServicioController();
		?>
		<hr>
		
		<div id="galeria">	
			<?php
				 $slide = new GestorGaleria();
				 $slide -> mostrarImagenVistaController();
			?>
		</div>
		
	</div>

<!--====  Fin de GALERIA ADMINISTRABLE  ====-->

