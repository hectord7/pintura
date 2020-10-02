/*=============================================
Agregar artículo          
=============================================*/
$("#btnAgregarServicio").click(function(){
	$("#agregarServicio").toggle(400);
})

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
			url:"views/ajax/gestorServicios.php",
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

					if(respuesta == 0){
						$("#arrastreImagenServicio").before('<div class="alert alert-warning alerta text-center">The image is less than 800px * 400px</div>')
					}else{
						$("#arrastreImagenServicio").html('<div id="imagenServicio"><img src="'+respuesta.slice(6)+'" class="img-thumbnail"></div>');
					}
			}

		})

	}

})

/*=============================================
Editar Artículo        
=============================================*/

$(".editarServicio").click(function(){

	idServicio = $(this).parent().parent().attr("id");
	rutaImagen = $("#"+idServicio).children("img").attr("src");
	titulo = $("#"+idServicio).children("h1").html();
	introduccion = $("#"+idServicio).children("p").html();
	contenido = $("#"+idServicio).children("input").val();

	$("#"+idServicio).html('<form method="post" enctype="multipart/form-data"><span><input style="width:10%; padding:5px 0; margin-top:4px; background-color: black; color: #eabe12;border: 2px solid #eabe12;" type="submit" class="btn btn-primary pull-right" value="Save"></span><div id="editarImagen"><input style="display:none" type="file" id="subirNuevaFoto" class="btn btn-default"><div id="nuevaFoto"><span class="fa fa-times cambiarImagen"></span><img src="'+rutaImagen+'" class="img-thumbnail"></div></div><input type="text" value="'+titulo+'" name="editarTitulo"><textarea cols="30" rows="5" name="editarIntroduccion">'+introduccion+'</textarea><textarea name="editarContenido" id="editarContenido" cols="30" rows="10">'+contenido+'</textarea><input type="hidden" value="'+idServicio+'" name="id"><input type="hidden" value="'+rutaImagen+'" name="fotoAntigua"><hr></form>');

	$(".cambiarImagen").click(function(){
	
		$(this).hide();

		$("#subirNuevaFoto").show();
		$("#subirNuevaFoto").css({"width":"90%"});
		$("#nuevaFoto").html("");
		$("#subirNuevaFoto").attr("name","editarImagen");
		$("#subirNuevaFoto").attr("required",true);

		$("#subirNuevaFoto").change(function(){

			imagen = this.files[0];
			imagenSize = imagen.size;

			if(Number(imagenSize) > 2000000){
				$("#editarImagen").before('<div class="alert alert-warning alerta text-center">The file exceeds the weight allowed, 200kb</div>')
			}
			else{
				$(".alerta").remove();
			}

			imagenType = imagen.type;
			
			if(imagenType == "image/jpeg" || imagenType == "image/png"){
				$(".alerta").remove();
			}
			else{
				$("#editarImagen").before('<div class="alert alert-warning alerta text-center">The file must be formatted JPG or PNG</div>')
			}

			if(Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png"){
				
				var datos = new FormData();
				datos.append("imagen", imagen);	

				$.ajax({
						url:"views/ajax/gestorServicios.php",
						method: "POST",
						data: datos,
						cache: false,
						contentType: false,
						processData: false,
						beforeSend: function(){
							$("#nuevaFoto").html('<img src="views/images/status.gif" style="width:15%" id="status2">');
						},
						success: function(respuesta){
				
							$("#status2").remove();
							
							if(respuesta == 0){
								$("#editarImagen").before('<div class="alert alert-warning alerta text-center">The image is less than 800px * 400px</div>')
							}
							else{
								$("#nuevaFoto").html('<img src="'+respuesta.slice(6)+'" class="img-thumbnail">');
							}
						}
				})	
			}
		})
	})
})

/*=============================================
Ordenar Item Servicios
=============================================*/

var almacenarOrdenId = new Array();
var ordenItem = new Array();

$("#ordenarServicios").click(function(){

	$("#ordenarServicios").hide();
	$("#guardarOrdenServicios").show();

	$("#editarServicio").css({"cursor":"move"})
	$("#editarServicio span i").hide()
	$("#editarServicio button").hide()
	$("#editarServicio img").hide()
	$("#editarServicio p").hide()
	$("#editarServicio hr").hide()
	$("#editarServicio div").remove()
	$(".bloqueServicio h1").css({"font-size":"14px","position":"absolute","padding":"10px", "top":"-15px", "color": "#eabe12", "font-weight":"bold"})
	$(".bloqueServicio").css({"padding":"2px"})
	$("#editarServicio span").html('<i class="glyphicon glyphicon-move" style="padding:8px; color: #eabe12"></i>')

	$("body, html").animate({
		scrollTop:$("body").offset().top
	}, 500)

	$("#editarServicio").sortable({
		revert: true,
		connectWith: ".bloqueServicio",
		handle: ".handleArticle",
		stop: function(event){

			for(var i= 0; i < $("#editarServicio li").length; i++){
				almacenarOrdenId[i] = event.target.children[i].id;
				ordenItem[i]  =  i+1;
			}	
		}
	})

	$("#guardarOrdenServicios").click(function(){

		$("#ordenarServicios").show();
		$("#guardarOrdenServicios").hide();

		for(var i= 0; i < $("#editarServicio li").length; i++){

			var actualizarOrden = new FormData();
			actualizarOrden.append("actualizarOrdenServicios", almacenarOrdenId[i]);
			actualizarOrden.append("actualizarOrdenItem", ordenItem[i]);

			$.ajax({
				url:"views/ajax/gestorServicios.php",
				method: "POST",
				data: actualizarOrden,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					$("#editarServicio").html(respuesta);
					swal({
						title: "¡OK!",
						text: "¡The order has been updated correctly!",
						type: "success",
						confirmButtonText: "Close",
						closeOnConfirm: false
						},
						function(isConfirm){
							if (isConfirm){
								window.location = "servicios";
							}
						});
				}
			})
		}
	})
})