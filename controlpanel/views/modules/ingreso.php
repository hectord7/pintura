<!--=====================================
FORMULARIO DE INGRESO         
======================================-->
<div id="backIngreso">

	<form method="post" id="formIngreso" onsubmit="return validarIngreso()">

		<h1 id="tituloFormIngreso">ENTRY TO THE CONTROL PANEL</h1>

		<input class="form-control formIngreso" type="text" placeholder="Enter your User" name="usuarioIngreso" id="usuarioIngreso">
		<input class="form-control formIngreso" type="password" placeholder="Enter your Password" name="passwordIngreso" id="passwordIngreso">

		<?php

			$ingreso = new Ingreso();
			$ingreso -> ingresoController();
			
		?>

		<input class="form-control formIngreso btn btn-primary" style="background-color: black;color: #eabe12; border: 2px solid #eabe12;" type="submit" value="Login">

	</form>

</div>



<!--====  Fin de FORMULARIO DE INGRESO  ====-->