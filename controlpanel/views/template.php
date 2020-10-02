<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control Panel - Daniel's Painting LLC</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="icon" href="views/images/logo.png">

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
    <link rel="stylesheet" href="views/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/jquery-ui.min.css">
	<link rel="stylesheet" href="views/css/sweetalert.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="views/css/jquery-ui.min.css">

	<script src="views/js/jquery-2.2.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/jquery.dataTables.min.js"></script>
	<script src="views/js/dataTables.bootstrap.min.js"></script>
	<script src="views/js/dataTables.responsive.min.js"></script>
	<script src="views/js/responsive.bootstrap.min.js"></script>
	<script src="views/js/jquery-ui.min.js"></script>
	<script src="views/js/sweetalert.min.js"></script>
	<script type="text/javascript">
    		$(document).ready(function () {
		        /*
		         * Al hacer clic sobre el checkbox verificamos si esta activado o no
		         * y asi alternamos entre el tipo de input donde esta la contrasena
		         * entre text y password
		         */
		        $('#mostrar_contrasena').click(function () {
		          if ($('#mostrar_contrasena').is(':checked')) {
		            $('#editarPassword').attr('type', 'text');
		          } else {
		            $('#editarPassword').attr('type', 'password');
		          }
		        });
		      });
    	</script>
</head>

<body>

	<div class="container-fluid">
		
		<div class="row">
		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->
		<?php
			$modulos = new Enlaces();
			$modulos -> enlacesController();
		?>
		<!--====  Fin de COLUMNA CONTENIDO  ====-->
		<hr style="border-color:#eabe12">
		</div>
	</div>

	<script src="views/js/script.js"></script>
	<script src="views/js/validarIngreso.js"></script>
	<script src="views/js/gestorSlide.js"></script>
	<script src="views/js/gestorServicios.js"></script>
	<script src="views/js/gestorGaleriaServicio.js"></script>
	<!--<script src="views/js/gestorGaleria.js"></script>-->
	<script src="views/js/gestorVideos.js"></script>
	<script src="views/js/gestorMensajes.js"></script>
	<script src="views/js/gestorPerfiles.js"></script>
	
</body>

</html>