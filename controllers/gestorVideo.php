<?php 

class Video{
	
	public function seleccionarVideosController(){

		//$respuesta = VideoModel::seleccionarVideosModel("videos");

		/*foreach ($respuesta as $row => $item) {
			echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<video controls width="100%">
						<source src="controlpanel/'.substr($item["vid_route"], 6).'" type="video/mp4">
					</video>
				</div>';
		}*/
		
		$cantidadMostrar=8;
		
		$compag = (int)(!isset($_GET['pag'])) ? 1 : $_GET['pag'];
		
		$lista = VideoModel::listarVideosModel("videos");
		$totalRegistro = ceil(count($lista) / $cantidadMostrar);
		
		$inicio = ($compag - 1) * $cantidadMostrar;
		
		$respuesta = VideoModel::seleccionarVideosModel("videos", $inicio, $cantidadMostrar);
		
		foreach ($respuesta as $row => $item){
			echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<video controls width="100%">
						<source src="controlpanel/'.substr($item["vid_route"], 6).'" type="video/mp4">
					</video>
				</div>';
		}
		/*Sector de Paginacion */
    
	    //Operacion matematica para botón siguiente y atrás 
		$IncrimentNum = (($compag + 1) <= $totalRegistro)?($compag +1):1;
	  	$DecrementNum = (($compag - 1)) < 1 ? 1:($compag - 1);
	  
		echo "  <div class='col-md-6 col-md-offset-3'>
				<ul class='pagination'>
					<li><a style='background-color: #eabe12; color: black; border-color: #eabe12;' href='?pag=".$DecrementNum."' aria-label='Previous'><span style='color:black;' aria-hidden='true'>&laquo;</span></a></li>";
	    //Se resta y suma con el numero de pag actual con el cantidad de 
	    //números  a mostrar
	     $Desde = $compag - (ceil($cantidadMostrar / 2) - 1);
	     $Hasta = $compag + (ceil($cantidadMostrar / 2) - 1);
	     
	     //Se valida
	     $Desde = ($Desde < 1) ? 1: $Desde;
	     $Hasta = ($Hasta < $cantidadMostrar) ? $cantidadMostrar:$Hasta;
	     //Se muestra los números de paginas
	     for($i = $Desde; $i <= $Hasta; $i++){
	     	//Se valida la paginación total
	     	//de registros
	     	if($i<=$totalRegistro){
	     		//Validamos la pagina activo
	     	  if($i == $compag){
	           echo "<li class='active'><a style='background-color: #eabe12; color: black; border-color: #eabe12;' href='?pag=".$i."' >".$i."</a></li>";
	     	  }else {
	     	  	echo "<li><a style='background-color: #eabe12; color: black; border-color: #eabe12;' href='?pag=".$i."'>".$i."</a></li>";
	     	  }     		
	     	}
	     }
		echo "<li><a style='background-color: #eabe12; color: black; border-color: #eabe12;' href='?pag=".$IncrimentNum."' aria-label='Next' ><span style='color:black; aria-hidden='true'>&raquo;</span></a></li></ul></div>";
	}
}