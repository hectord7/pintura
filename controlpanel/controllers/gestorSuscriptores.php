<?php

class SuscriptoresController{

	public function mostrarSuscriptoresController(){

		$respuesta = SuscriptoresModel::mostrarSuscriptoresModel("subscriber");

		foreach ($respuesta as $row => $item){

			echo '<tr>
			        <td>'.$item["subs_name"].'</td>
			        <td>'.$item["subs_email"].'</td>
			        <td>
			        	<a href="index.php?action=suscriptores&idBorrar='.$item["subs_id"].'"><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></a>
			        </td>
			        <td>
			        </td>
			      </tr>';

		}

	}
	
	public function borrarSuscriptoresController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];

			$respuesta = SuscriptoresModel::borrarSuscriptoresModel($datosController, "subscriber");

			if($respuesta == "ok"){

					echo'<script>
							swal({
								  title: "¡OK!",
								  text: "¡Subscriber has been successfully deleted!",
								  type: "success",
								  confirmButtonText: "Close",
								  closeOnConfirm: false
							},

							function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "suscriptores";
								  } 
							});
						</script>';
			}
		}
	}

	#IMPRESIÓN SUSCRIPTORES
	#------------------------------------------------------------

	public function impresionSuscriptoresController($datos){

		$datosController = $datos;

		$respuesta = SuscriptoresModel::mostrarSuscriptoresModel($datosController);
	
		return $respuesta;

	}

	public function suscriptoresSinRevisarController(){

		$respuesta = SuscriptoresModel::suscriptoresSinRevisarModel("subscriber");

		$sumaRevision = 0;

		foreach ($respuesta as $row => $item) {
			if($item["subs_review"] == 0){
				++$sumaRevision;
				echo '<span>'.$sumaRevision.'</span>';			
			}
		}

	}
		
	public function suscriptoresRevisadosController($datos){

		$datosController = $datos;

		$respuesta = SuscriptoresModel::suscriptoresRevisadosModel($datosController, "subscriber");

		echo $respuesta;
	}

}