<?php

class Galeria{

	public function seleccionarGaleriaController(){
		
		$respuestaServicio = GaleriaModels::listarServicioModel("service");
		
		$i = 1;
		
		foreach($respuestaServicio as $rowServicio => $itemServicio){
			
			$i=1;
			
			$id = $itemServicio["serv_id"];
			
			$respuesta = GaleriaModels::listarGaleriaModel($id, "gallery", "service");
			echo '<div class="col-md-6">
					<h2 style="text-align: center; color: #eabe12">'.ucwords($itemServicio["serv_title"]).'</h2>
					<div id="myCarousel'.$id.'" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">';
			foreach ($respuesta as $row => $item){
				if($i == 1){
					echo '<div class="item active">
					        <img src="controlpanel/'.$item["galle_route"].'" alt="Facebook" class="img-responsive"
					        style="width: 100%; max-width: 800px; max-height: 400px;">
					      </div>';
				} else {
					echo '<div class="item">
				        <img src="controlpanel/'.$item["galle_route"].'" alt="Facebook" class="img-responsive" style="width: 100%; max-width: 800px; max-height: 400px;">
				      </div>';
				}
				$i++;
			}
			echo '</div>
				  <a class="left carousel-control" href="#myCarousel'.$id.'" role="button" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
			      </a>
				  <a class="right carousel-control" href="#myCarousel'.$id.'" role="button" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				  </a>';
				
				  
			echo'	  </div>
  				  </div>';
		}
	}

}