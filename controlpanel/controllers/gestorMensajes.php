<?php

class MensajesController{

	
	public function mostrarMensajesController(){

		$respuesta = MensajesModel::mostrarMensajesModel("message");

		foreach ($respuesta as $row => $item){

			echo '<div class="well well-sm" id="'.$item["msg_id"].'">		
					<a href="index.php?action=mensajes&idBorrar='.$item["msg_id"].'"><span class="fa fa-times pull-right"></span></a>
					<p>'.$item["msg_date"].'</p>
					<h3>De: '.$item["msg_name"].'</h3>
					<h5>Email: '.$item["msg_email"].'</h5>
				  	<input type="text" class="form-control" value="'.$item["msg_message"].'" readonly>
				  	<br>
				  	<button class="btn btn-info btn-sm leerMensaje" style="background-color: black; color: #eabe12; border: 2px solid #eabe12;">Read</button>
				  </div>';
		}
	}	

	public function borrarMensajesController(){

		if(isset($_GET["idBorrar"])){

			$datosController = $_GET["idBorrar"];

			$respuesta = MensajesModel::borrarMensajesModel($datosController, "message");

			if($respuesta == "ok"){

					echo'<script>
							swal({
							  title: "¡OK!",
							  text: "¡The message has been successfully deleted!",
							  type: "success",
							  confirmButtonText: "Close",
							  closeOnConfirm: false
							},

							function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "mensajes";
								  } 
							});
						</script>';
			}
		}
	}

	public function responderMensajesController(){

		if(isset($_POST['enviarEmail'])){

			$email = $_POST['enviarEmail'];
			$nombre = $_POST['enviarNombre'];
			$titulo = $_POST['enviarTitulo'];
			$mensaje =$_POST['enviarMensaje'];

			$para = $email . ', ';
			$para .= 'estimatesfcdaniels@gmail.com';

			$título = 'Reply to your message';

			$mensaje ='<html>
							<head>
								<title>Reply to your Message</title>
							</head>

							<body>
								<h1>Hello '.ucwords($nombre).'</h1>
								<p>'.$mensaje.'</p>
								<hr>
								<p><b>Daniels Painting LLC.</b><br>								
								Dirección</br> 
								telefono de contacto</br> 
								correo de contacto</p>

								<h3><a href="#" target="blank">aqui va el nombre del dominio</a></h3>

								<a href="https://www.facebook.com/daniel.painting2018/?ti=as" target="blank"><img src="https://res.cloudinary.com/zoominfo-com/image/upload/w_70,h_70,c_fit/v1497349368/facebook.com"></a> 
								<a href="https://www.instagram.com/daniel.painting2018/" target="blank"><img src="data:image/jpeg;base64,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"></a> 
							</body>

					   </html>';

		   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		   $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		   $cabeceras .= 'From: <estimatesfcdaniels@gmail.com>' . "\r\n";

		   $envio = mail($para, $título, $mensaje, $cabeceras);

		   if($envio){
		   		echo'<script>
						swal({
							  title: "¡OK!",
							  text: "¡The message has been sent correctly!",
							  type: "success",
							  confirmButtonText: "Close",
							  closeOnConfirm: false
						},

						function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "mensajes";
							  } 
						});
					</script>';
		   }
		}
	}

	public function mensajesMasivosController(){

		if(isset($_POST["tituloMasivo"])){

			$respuesta = MensajesModel::seleccionarEmailSuscriptores("subscriber");

			foreach ($respuesta as $row => $item) {

				$titulo = $_POST['tituloMasivo'];
				$mensaje =$_POST['mensajeMasivo'];

				$título = 'Message for all';

				$para = $item["subs_email"]; 

				$mensaje ='<html>
								<head>
									<title>Reply to your Message</title>
								</head>
								<body>
									<h1>Hola '.ucwords($item["subs_name"]).'</h1>
									<p>'.$mensaje.'</p>
									<hr>
									<p><b>Daniels Painting LLC.</b><br>									 
									direccion</br> 
									telefono</br> 
									email de la empresa</p>

									<h3><a href="#" target="blank">enlace del dominio</a></h3>

									<a href="https://www.facebook.com/daniel.painting2018/?ti=as" target="blank"><img src="https://res.cloudinary.com/zoominfo-com/image/upload/w_70,h_70,c_fit/v1497349368/facebook.com"></a> 
									<a href="https://www.instagram.com/daniel.painting2018/" target="blank"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPBg8UDxEQEA0RFQ4NEBESEBAPDxUWFREiIhURFRUaKCgsJBsmJxUVLTEtMSkrOjouIys2ODU4QzQtOisBCgoKDg0OGxAQGi0lICAtMC0vLS8tKysvLSsrLS0tKy0tLS03LS0tLS0tListKy0tLSstLSstKy0tOC0tLSsrLv/AABEIAEYARgMBEQACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAGAgMFBAcBAP/EAEEQAAIABAIFBQsKBwAAAAAAAAECAAMEEQUhBhIxQXEiUWGBoQcTMlKCg5GisdLwFBcjQlRik7TBwhUnN3OSs9H/xAAaAQACAwEBAAAAAAAAAAAAAAACAwQFBgEA/8QAKxEAAgEDAgUDAwUAAAAAAAAAAAECAwQRITEFEhNBUSIy8CM0UhQVJGHB/9oADAMBAAIRAxEAPwCorAZN9sRIgsnNSJEGmeeFuz4Vg0xLmvJArBpoBzh5IlYNSQDcPJAiGppg67IgRDFLAuUMECIYmKaNcrGeUi27m5ozo6auYWclKdci29vur+phqRW31/0vTHc3J2kFBRtqU0gTGXIstgP8zcmDyV8LO4ra1JYKj3QB9lH4o92O8w18Gl2mfvnBH2Ufij3Y6mzz4NP8z584a76UW/uj3YNJgftM/wAy2X/DcVUrqd4qrEjkqr8QRkw458I7rERJXFs98oDY3hMykrmlzN2asByWU7GHxtiTCpks6FZVo5W5mkQ5MNo2SsZ3OxY50bG+ksw0mjMiRL5JcarEZGwF39JI6rxKm8YM5Zw61zKo+wDKwvmNJyvJ1YfhU+pe0mWWttOxRxY5QyKyR693Tov1s05mhNaJdwqNvsJg1u2w7YZghri9LOrMujp1lYzKWrQqgde+KwIyvvG8fpBZJNeop0M0HlsWab1VKKCUadpfyhWVpTStXWAG0kjYNnXBIpbKlVlNxls/JXpgBV6I09TYCYuoW4Nk44XAgoPU9a81K4dI89IiUmW7Rtlc4zcHsSJv0sYd0TwKXzn7Yl1njBS8HeJTQVwqgNRiMuWMtY2J5gM2PoBgafqLa5rOjScxbpBjQoJS09IqqygFmtfVvsy3k7ST23ye3ylNZ2krqXVq7BqVpRWrNv35m3kMFZT0Wtl1WjimWk+G27jpESzBLxfAGbVC1cq9ucNa4APin28IankqYudlXx2Z50wgomkik9h1VD+WC+R+YjqepnIZ/XPJ5+REhMu2jdK5xmovUOfsYt7oA+jpvOftidcvRFJwj3yMrQlgMfS+9ZgXja/sBgaEiZxRfx3g5dLpTLpBP1vrEOOBUW/51QdVsbwxqVskjEIjyZPWGnqM+5xKYGpfYlpa33XFyfRftiRBlDxiUW4x7gmrYNUuV2FmI4Em0EmXlL2IZ1P9Ml8n8xBooI/f/PABIhyZeNCArGXpy1OT9jFWnovLpvOexYsbp+mJS8J98gnImtLnq6mzqQy9UR6dXDLqrThUg49hifkuKUq6x73VKOca3SBfwl+MonRamjP/AFrOeVrE5Jegv0vLnjUGZslmt1mw7YJUcEiXGG46R1IY7jEimww01HYkgq7qbgA+Fyt7Hng+oonLW1qVqnVq7AciOJmgSxEb1Qt3NF8j/feHIz0Pv/ngAkZwxMvmhGRGSUtci3roLGliv0dXVI7/ACrZE53AtY8R2xcZVelymf5na3P9MGzpRVyGBDDIg5G/TELHL2L+FSEtmUkQ2MpdhjUXuj5MnOVsWYjmLEj0Q5SkAqUPBzsIYpMcuVI6cLwyZVVipLHNrNbkqN7E/F4fFsjXNzTpU229RHp1UpJoJNJLPgBGfPMBRZQek3J6umH5KrhlOVSo6rA5gkzQCVljHxeuCLF43LqCumU8/WQ9DA5qRzERKoXLpSE17eNZYe5vHG6OoA+UyrNsvq63oYZxZxuac90VX6O4pv6bImbhHi+rOg+eidcL97/4QM3B/F9WdBKVE707/wCYImfgw+r6s6GKVI907/5gorNLZUqnKUUoJ94qFUdIUbT8Zwbqx7BU+G1JzzVYNqJrPNZnJZ2JLE5kk748nkvqcI0o8sSg7YYmMFLiMgiCipxBoailhDonSpocjpU0PiEVND4nSpobE6VtD4nSo7YYjp//2Q=="></a>							
								</body>
						   </html>';

			   $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			   $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			   $cabeceras .= 'From: <estimatesfcdaniels@gmail.com>' . "\r\n";

			   $envio = mail($para, $título, $mensaje, $cabeceras);

			   if($envio){
			   		echo'<script>
							swal({
								  title: "¡OK!",
								  text: "¡The message has been sent correctly!",
								  type: "success",
								  confirmButtonText: "Close",
								  closeOnConfirm: false
							},

							function(isConfirm){
								 if (isConfirm) {	   
								    window.location = "mensajes";
								  } 
							});
						</script>';
			   }
			}
		}
	}

	public function mensajesSinRevisarController(){

		$respuesta = MensajesModel::mensajesSinRevisarModel("message");
		$sumaRevision = 0;

		foreach ($respuesta as $row => $item) {
			if($item["msg_review"] == 0){
				++$sumaRevision;
				echo '<span>'.$sumaRevision.'</span>';			
			}
		}

	}
		
	public function mensajesRevisadosController($datos){

		$datosController = $datos;
		$respuesta = MensajesModel::mensajesRevisadosModel($datosController, "message");
		echo $respuesta;
	}

}