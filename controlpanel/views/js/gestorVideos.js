/*========================================
=            area de arrastre            =
========================================*/
if($("#galeriaVideo").html() == 0){
	$("#galeriaVideo").css({"height":"100px"})
} else {
	$("#galeriaVideo").css({"height":"auto"})
}
/*=====  End of area de arrastre  ======*/

/*===================================
=            subir video            =
===================================*/
$("#subirVideo").change(function(){
	video = this.files[0];

	//Validar tamaño del video

	videoSize = video.size;

	if(Number(videoSize) > 50000000){
		$("#galeriaVideo").before('<div class="alert alert-warning alerta text-center">The file exceeds the weight allowed, 50 mb</div>')
	} else{
		$(".alerta").remove();
	}

	// Validar tipo del video

	videoType = video.type;

	if(videoType == "video/mp4"){
		$(".alerta").remove();
	} else{
		$("#galeriaVideo").before('<div class="alert alert-warning alerta text-center">The file must be formatted MP4</div>')
	}

	/*==============================================
	=            mostrar video con AJAX            =
	==============================================*/
	if(Number(videoSize) < 50000000 && videoType == "video/mp4"){
		var datos = new FormData();
		datos.append("video", video);

		$.ajax({
			url:"views/ajax/gestorVideos.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function(){
				$("#galeriaVideo").before('<img src="views/images/status.gif" id="status">');
			},
			success: function(respuesta){
				$(".status").remove();
				console.log('respuesta');

				$("#galeriaVideo").css({"height":"auto"})

				$("#galeriaVideo").append('<li><span class="fa fa-times"></span><video controls><source src="'+respuesta.slice(6)+'" type="video/mp4"></video></li>');
				swal({
					title: "¡OK!",
					text: "¡The video was successfully uploaded!",
					type: "success",
					confirmButtonText: "Close",
					closeOnConfirm: false
					},

					function(isConfirm){
						if (isConfirm){
							window.location = "videos";
						}
					});
			}
		});
	}	
	/*=====  End of mostrar video con AJAX  ======*/
	
});
/*=====  End of subir video  ======*/
/*======================================
=            eliminar video            =
======================================*/
$(".eliminarVideo").click(function(){

	if($(".eliminarVideo").length == 1){
		$("#galeriaVideo").css({"height":"100px"})
	}

	idVideo = $(this).parent().attr("id");
	rutaVideo = $(this).attr("ruta");


	$(this).parent().remove();

	var borrarVideo = new FormData();
	borrarVideo.append("idVideo", idVideo);
	borrarVideo.append("rutaVideo", rutaVideo);

	$.ajax({
		url:"views/ajax/gestorVideos.php",
		method: "POST",
		data: borrarVideo,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			console.log("respuesta", respuesta);
		}
	});
});
/*=====  End of eliminar video  ======*/
/*=====================================
=            ordenar video            =
=====================================*/
almacenarOrdenId = new Array();
ordenItem = new Array();

$("#ordenarVideo").click(function(){
	$("#ordenarVideo").hide();
	$("#guardarVideo").show();

	$("#galeriaVideo").css({"cursor":"move"});
	$("#galeriaVideo span").hide();

	$("#galeriaVideo").sortable({
		revert: true,
		connectWith: ".bloqueVideo",
		handle: ".handleVideo",
		stop: function(event){
			for(var i= 0; i < $("#galeriaVideo li").length; i++){
				almacenarOrdenId[i] = event.target.children[i].id;
				ordenItem[i]  =  i+1;
			}
		}
	});
});

$("#guardarVideo").click(function(){
	$("#ordenarVideo").show();
	$("#guardarVideo").hide();

	for(var i= 0; i < $("#galeriaVideo li").length; i++){
		var actualizarOrden = new FormData();
		actualizarOrden.append("actualizarOrdenVideo", almacenarOrdenId[i]);
		actualizarOrden.append("actualizarOrdenItem", ordenItem[i]);

		$.ajax({
			url:"views/ajax/gestorVideos.php",
			method: "POST",
			data: actualizarOrden,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
				$("#galeriaVideo").html(respuesta);
				swal({
					title: "¡OK!",
					text: "¡The video was ordered correctly!",
					type: "success",
					confirmButtonText: "Close",
					closeOnConfirm: false
					},

					function(isConfirm){
						if (isConfirm){
							window.location = "videos";
						}
				});
			}
		});
	}
});
/*=====  End of ordenar video  ======*/
