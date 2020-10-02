<?php 

class Servicios{	
	
	public function seleccionarServiciosController(){

		$respuesta = ServiciosModel::seleccionarServiciosModel("service");

		foreach ($respuesta as $row => $item) {
			echo '<li class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background-color: black">
					<img src="controlpanel/'.$item["serv_route"].'" class="img-thumbnail">
					<h1 style="color: #eabe12; font-weight: bold; font-size: 16px;">'.ucwords($item["serv_title"]).'</h1>
					<p style="color: #eabe12; font-weight: bold; font-size: 12px;">'.$item["serv_introduction"].'</p>
					<a href="#servicio'.$item["serv_id"].'" data-toggle="modal">
					<button class="btn btn-default" style="background-color: #eabe12;color: black; border: 2px solid black;">Read more</button>
					</a>
					<hr style="border-color: black;">
				 </li>
				<div id="servicio'.$item["serv_id"].'" class="modal fade" data-backdrop="static">      
					<div class="modal-dialog modal-content" style="background-color: black; color: #eabe12;">
						<div class="modal-header" style="border:1px solid #eabe12">			            
			   				<button type="button" class="close" data-dismiss="modal" style="color: #eabe12">&times;</button>
			  		 		<h3 class="modal-title" style="font-weight: bold;">'.$item["serv_title"].'</h3>			            
						</div>
						<div class="modal-body" style="border:1px solid #eabe12">			            
			    			<img src="controlpanel/'.$item["serv_route"].'" width="100%" style="margin-bottom:20px; border: 1px solid #eabe12">
							  <textarea disabled class="form-control" rows="10" id="comment" style="resize: none;border: 0; text-align: justify; background-color: white; width: 100%">'.$item["serv_content"].'</textarea>
						</div>
						<div class="modal-footer" style="border:1px solid #eabe12">		            
		    				<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #eabe12; color: black; border: 1px solid #eabe12">Close</button>		            
						</div>
					</div>
				</div>';
		}
	}
}