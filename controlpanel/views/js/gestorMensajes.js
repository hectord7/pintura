/*========================================
=            mostrar mensajes            =
========================================*/
$(".leerMensaje").click(function(){

	id = $(this).parent().attr("id");
	fecha = $("#"+id).children("p").html();
	nombre = $("#"+id).children("h3").html();
	email = $("#"+id).children("h5").html();
	mensaje = $("#"+id).children("input").val();

	$("#visorMensajes").html('<div class="well well-sm"><h3>From: '+nombre+'</h3><h5>Email: '+email+'</h5><p style="background:#fff; padding:10px">'+mensaje+'</p><button class="btn btn-info btn-sm responderMensaje" style="background-color: black; color: #eabe12; border: 2px solid #eabe12;">Answer</button></div>');

	$(".responderMensaje").click(function(){

		enviarEmail = $(this).parent().children("h5").html();
		enviarNombre = $(this).parent().children("h3").html();

		$("#visorMensajes").html('<form method="post"><p>For: <input type="email" style="border: 0" value="'+enviarEmail.slice(13)+'" name="enviarEmail" readonly><input type="hidden" value="'+enviarNombre.slice(8)+'" name="enviarNombre"></p><input type="text" name="enviarTitulo" placeholder="Title of the Message" class="form-control"><textarea name="enviarMensaje" cols="30" rows="5" placeholder="Write your message..." class="form-control"></textarea><input type="submit" class="form-control btn btn-primary" style="background-color: black; color: #eabe12; border: 2px solid #eabe12;" value="Send"></form>');
	});

});
/*=====  End of mostrar mensajes  ======*/

/*============================================
=            enviar correo masivo            =
============================================*/
$("#enviarCorreoMasivo").click(function(){

	$("#visorMensajes").html('<form method="post"><p>To: All Subscribers</p><input type="text" placeholder="Title of the Message" class="form-control" name="tituloMasivo"><textarea name="mensajeMasivo" cols="30" rows="5" placeholder="Write your message..." class="form-control"></textarea><input type="submit" class="form-control btn btn-primary" style="background-color: black; color: #eabe12; border: 2px solid #eabe12;" value="Send"></form>');
});

/*=====  End of enviar correo masivo  ======*/