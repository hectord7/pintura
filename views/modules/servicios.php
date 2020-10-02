<div class="row" id="servicios">
	<hr style="border-color: #eabe12">
	<hr style="border-color: #eabe12">
	<h3 class="text-center text-info"><b style="color: #eabe12;">OUR SERVICES</b></h3>
	<hr style="border-color: #eabe12">
	<ul>
		<?php 
			$servicios = new Servicios();
			$servicios -> seleccionarServiciosController();
		?>	
	</ul>
</div>