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
SLIDE ADMINISTRABLE          
======================================-->

<div id="imgSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>

<p><span class="fa fa-arrow-down"></span>  Drag your image here (recommended size: 1600px * 600px and recommended weight: 2MB)</p>
	
	<ul id="columnasSlide">

	<?php

	$slide = new GestorSlide();
	$slide -> mostrarImagenVistaController();

	?>
		
	</ul>

	<button id="ordenarSlide" class="btn btn-warning pull-right" style="margin:10px 30px; background-color: black;color: #eabe12; border: 2px solid #eabe12">Order Slides</button>

	<button id="guardarSlide" class="btn btn-primary pull-right" style="background-color: #eabe12;color: black; border: 2px solid black; display:none; margin:10px 30px">Save Order Slides</button>

</div>

<!--===============================================-->

<div id="textoSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>
	
	<ul id="ordenarTextSlide">

	<?php

	$slide = new GestorSlide();
	$slide -> editorSlideController();

	?>

	</ul>
</div>
