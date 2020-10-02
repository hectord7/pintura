/*=============================================
Área de arrastre de imágenes
=============================================*/

if($("#lightbox").html() == 0){
	$("#lightbox").css({"height":"100px"});
}
else{
	$("#lightbox").css({"height":"auto"});
}

/*=============================================
Subir múltiples Imagenes
=============================================*/
// $("body").on("dragover", function(e){

// 	e.preventDefault();
// 	e.stopPropagation();

// })


$("#lightbox").on("dragover", function(e){

	// e.preventDefault();
	// e.stopPropagation();

	$("#lightbox").css({"background":"url(views/images/pattern.jpg)"})

});

/*=============================================
Soltar las Imágenes
=============================================*/

// $("body").on("drop", function(e){

// 	e.preventDefault();
// 	e.stopPropagation();

// });

var imagenSize = [];
var imagenType = [];

$("#lightbox").on("drop", function(e){

	// e.preventDefault();
	// e.stopPropagation();

	$("#lightbox").css({"background":"white"})

	archivo = e.originalEvent.dataTransfer.files;
	
	for(var i = 0; i < archivo.length; i++){

		imagen = archivo[i];
		imagenSize.push(imagen.size);
		imagenType.push(imagen.type);

		if(Number(imagenSize[i]) > 2000000){
			$("#lightbox").before('<div class="alert alert-warning alerta text-center">The file exceeds the weight allowed, 2mb</div>')
		}
		else{
			$(".alerta").remove();
		}

		if(imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){
			$(".alerta").remove();	

		}
		else{
			$("#lightbox").before('<div class="alert alert-warning alerta text-center">The file must be formatted JPG or PNG</div>')
		}

		if(Number(imagenSize[i]) < 2000000 && imagenType[i] == "image/jpeg" || imagenType[i] == "image/png"){

			var datos = new FormData();

			datos.append("imagen", imagen);

			$.ajax({
				url:"views/ajax/gestorGaleria.php",
				method: "POST",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function(){

					$("#lightbox").append('<li  id="status"><img src="views/images/status.gif"></li>');	
				},
				success: function(respuesta){

					$("#status").remove();
					console.log(respuesta);

					if(respuesta == 0){

						$("#lightbox").before('<div class="alert alert-warning alerta text-center">The image is less than 1024px * 768px</div>')

					}
					else{

						$("#lightbox").css({"height":"auto"});

						$("#lightbox").append('<li><span class="fa fa-times"></span><a rel="grupo" href="'+respuesta.slice(6)+'"><img src="'+respuesta.slice(6)+'"></a></li>');

						swal({
							title: "¡OK!",
							text: "¡The image was successfully uploaded!",
							type: "success",
							confirmButtonText: "Close",
							closeOnConfirm: false
							},

							function(isConfirm){
								if (isConfirm){
									window.location = "galeria";
								}
						});
					}

				}

			})

		}
	
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

		url:"views/ajax/gestorGaleria.php",
		method: "POST",
		data: borrarItem,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			console.log('respuesta', respuesta);	
		}

	})

});

/*=============================================
Ordenar Item Galería
=============================================*/


var almacenarOrdenId = [];
var ordenItem = [];

$("#ordenarGaleria").click(function(){

	$("#ordenarGaleria").hide();
	$("#guardarGaleria").show();

	$("#lightbox").css({"cursor":"move"})
	$("#lightbox span").hide()

	$("#lightbox").sortable({
		revert: true,
		connectWith: ".bloqueGaleria",
		handle: ".handleImg",
		stop: function(event){

			for(var i= 0; i < $("#lightbox li").length; i++){

				almacenarOrdenId[i] = event.target.children[i].id;
				ordenItem[i]  =  i+1;  		

			}

		}

	})

})

$("#guardarGaleria").click(function(){

	$("#ordenarGaleria").show();
	$("#guardarGaleria").hide();

	for(var i= 0; i < $("#lightbox li").length; i++){

		var actualizarOrden = new FormData();
		actualizarOrden.append("actualizarOrdenGaleria", almacenarOrdenId[i]);
		actualizarOrden.append("actualizarOrdenItem", ordenItem[i]);

		$.ajax({

			url:"views/ajax/gestorGaleria.php",
			method: "POST",
			data: actualizarOrden,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){

				$("#lightbox").html(respuesta);

				swal({
						title: "¡OK!",
						text: "¡The order has been updated correctly!",
						type: "success",
						confirmButtonText: "Close",
						closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "galeria";
							}
						});

			}


		})

	}

})