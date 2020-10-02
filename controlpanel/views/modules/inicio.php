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
INICIO       
======================================-->

<div id="inicio" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
 	<div class="jumbotron">
	    <h1>Welcome to the control panel</h1>
	    <p>Here you can manage images, services and have control of the entire platform.</p>
	</div>

		<hr>
	
	<ul>

		<li class="botonesInicio">
			<a href="slide">
			<div style="background:black">
			<span class="fa fa-toggle-right" style="color: #eabe12;"></span>
			<p style="color: #eabe12;">Slide</p>
			</div>
			</a>
		</li>

		<li class="botonesInicio">
			<a href="servicios">
			<div style="background:black">
			<span class="fa fa-file-text-o" style="color: #eabe12;"></span>
			<p style="color: #eabe12;">Services</p>
			</div>
			</a>
		</li>

		<li class="botonesInicio">
			<a href="galeria">
			<div style="background:black">
			<span class="fa fa-image" style="color: #eabe12;"></span>
			<p style="color: #eabe12;">Gallery</p>
			</div>
			</a>
		</li>

		<li class="botonesInicio">
			<a href="suscriptores">
			<div style="background:black">
			<span class="fa fa-users" style="color: #eabe12;"></span>
			<p style="color: #eabe12;">Subscribers</p>
			</div>
			</a>
		</li>
		
		<li class="botonesInicio">
			<a href="videos">
			<div style="background:black">
			<span class="fa fa-users" style="color: #eabe12;"></span>
			<p style="color: #eabe12;">Videos</p>
			</div>
			</a>
		</li>
	</ul>
	<div class="clearfix"></div>
	<div align="center" class="container">
		<header class="major">
			<p style="color: black;"> &copy; 2018  FC DANIEL'S PAINTING LLC. All rights reserved.</p>
		</header>
	</div>
</div>
<!--====  Fin de INICIO  ====-->