<!--=====================================
 CABEZOTE             
======================================-->

<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		<ul>
			<li  style="background: black">
				<a href="mensajes" style="color: #eabe12">
	      			<i class="fa fa-envelope"></i>
			      	<?php
		  				$revisarMensajes = new MensajesController();
		  				$revisarMensajes -> mensajesSinRevisarController();	
		      		?>
	        	</a>
			</li>
			<li  style="background: black">
				<a href="suscriptores" style="color: #eabe12">
	      			<i class="fa fa-bell"></i>
	      			<?php
	      				$revisarSuscriptores = new SuscriptoresController();
	      				$revisarSuscriptores -> suscriptoresSinRevisarController();	
	      			?>
	   			</a>
			</li>						
		</ul>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right" style="float: right;">
		<img src="<?php echo $_SESSION["photo"]; ?> " class="img-circle">
		<p id="member"><?php echo $_SESSION["usuario"];?> <span class="fa fa-chevron-down"></span>
			<br>
			<ol id="admin">
				<li><a href="perfil"><span class="fa fa-user"></span>Edit profile</a></li>
				<li><a href="salir"><span class="fa fa-times"></span>logout</a></li>
			</ol>
		</p>
	</div>
</div>
<!--====  Fin de CABEZOTE  ====-->