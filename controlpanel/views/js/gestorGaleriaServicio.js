// /*=============================================
// Agregar imagen a servicio          
/*=============================================*/
$("#btnAgregarGaleria").click(function(){
	$("#agregarGaleria").show();
})

// if($("#lightbox").html() == 0){
// 	$("#lightbox").css({"height":"100px"});
// }
// else{
// 	$("#lightbox").css({"height":"auto"});
// }

/*=============================================
Subir Imagen a través del Input         
=============================================*/
$("#subirFoto").change(function(){

	imagen = this.files[0];
	
	//Validar tamaño de la imagen
	imagenSize = imagen.size;
	if(Number(imagenSize) > 2000000){
		$("#arrastreImagenServicio").before('<div class="alert alert-warning alerta text-center">The file exceeds the weight allowed, 200kb</div>')
	}
	else{
		$(".alerta").remove();
	}

	// Validar tipo de la imagen
	imagenType = imagen.type;
	if(imagenType == "image/jpeg" || imagenType == "image/png"){
		$(".alerta").remove();
	}
	else{
		$("#arrastreImagenServicio").before('<div class="alert alert-warning alerta text-center">The file must be formatted JPG or PNG</div>')
	}

	/*=============================================
	Mostrar imagen con AJAX       
	=============================================*/
	if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){

		var datos = new FormData();

		datos.append("imagen", imagen);

		$.ajax({
			url:"views/ajax/gestorGaleriaServicio.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function(){
					$("#arrastreImagenServicio").before('<img src="views/images/status.gif" id="status">');
				},
			success: function(respuesta){
					$("#status").remove();
					console.log(respuesta);

					if(respuesta == 0){
						$("#arrastreImagenServicio").before('<div class="alert alert-warning alerta text-center">The image is less than 1024px * 768px</div>')
					}else{
						$("#arrastreImagenServicio").html('<div id="imagenServicio"><img src="'+respuesta.slice(6)+'" class="img-thumbnail"></div>');
					}
			}
		})
	}
})

/*=============================================
Eliminar Item Galería
=============================================*/

$(".eliminarFoto").click(function(){

	if($(".eliminarFoto").length == 1){
		$("#lightbox").css({"height":"100px"});
	}

	idGaleria = $(this).parent().attr("id");
	rutaGaleria = $(this).attr("ruta");

	$(this).parent().remove();

	var borrarItem = new FormData();
	borrarItem.append("idGaleria", idGaleria);
	borrarItem.append("rutaGaleria", rutaGaleria);

	$.ajax({
		url:"views/ajax/gestorGaleriaServicio.php",
		method: "POST",
		data: borrarItem,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			console.log(respuesta);	
		}
	})
});