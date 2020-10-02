<footer class="row" id="contactenos" style="background-color: black;">

	<hr style="border-color:#eabe12">
	
	<h1 class="text-center text-info" style="color: #eabe12; font-weight: bold;"><b>FREE ESTIMATES</b></h1>

	<hr style="border-color: #eabe12">
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3173.0669407392857!2d-79.954234!3d37.317242!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884d0e67f52cf725%3A0x88ef7f85058b910a!2s1019+Hershberger+Rd+NW%2C+Roanoke%2C+VA+24012%2C+EE.+UU.!5e0!3m2!1ses!2sco!4v1531859508598" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jumbotron" style="background-color: black">
    		<h4 class="blockquote-reverse text-primary" style="color: black">
    			<ul>
	              <li style="color: #eabe12"><span class="glyphicon glyphicon-phone" style="color: #eabe12"></span>  540-2932637 / 540-5268057</li>
	              <li style="color: #eabe12"><span class="glyphicon glyphicon-map-marker" style="color: #eabe12"></span>  1019-Hershberger rd nw Roanoke va 24012</li>
	              <li style="color: #eabe12"><span class="glyphicon glyphicon-envelope" style="color: #eabe12"></span> estimatesfcdaniels@gmail.com</li>    
	          	</ul>      
    		</h4>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="formulario" style="background-color: black;">
		<ol>
    		<li>
        		<a href="https://www.facebook.com/daniel.painting2018/?ti=as" target="_blank">
          		<i class="fa fa-facebook" style="font-size:24px;margin-top: 15px;"></i>  
       		 	</a>
   			</li>
    		<li>
        		<a href="https://www.instagram.com/daniel.painting2018/" target="_blank">  
          		<i class="fa fa-instagram" style="font-size:24px;margin-top: 15px;"></i>  
       			</a>
    		</li>
		</ol>
		<form id="form1" method="POST" onsubmit="return validarMensaje();">
		    <input type="text" id="nombre" name="nombre" class="form-control"  placeholder="Name" required>
		    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
		    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Content of the Message" class="form-control" required style="resize: none;"></textarea>
		  	<input id="send" type="submit" class="btn btn-default" style="background-color: #eabe12; color: black; font-weight: bold; border: 2px solid #eabe12" value="Send">
		</form>
		<?php 
			$mensajes = new MensajesController();
			$mensajes -> registroMensajeController();
		?>
	</div>
</footer>