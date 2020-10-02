<?php

session_start();

if(!$_SESSION["validar"]){

  header("location:ingreso");

  exit();

}

include "views/modules/botonera.php";
include "views/modules/cabezote.php";
include "controllers/encrypter.php";

$pwd = Encrypter::decrypt($_SESSION["password"]);

?>
<!--=====================================
PERFIL       
======================================-->

<div id="editarPerfil" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
 
	<h1>Hola <?php echo $_SESSION["usuario"]; ?> 
	<span class="btn btn-info fa fa-pencil pull-left" id="btnEditarPerfil" style="font-size:10px; margin-right:10px"></span></h1>

	<div style="position:relative">
	<img src="<?php echo $_SESSION["photo"]; ?> " class="img-circle pull-right">	
	</div>

	<hr>
	
	<h4>Email: <?php echo $_SESSION["email"]; ?>  </h4>

	<h4>Contraseña: ******</h4>

</div>

<!-- ================================== 
Editar perfil
====================================-->

<div id="formEditarPerfil" class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display: none;">
  <form method="post" style="padding: 20px;" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="idPerfil" value="<?php echo $_SESSION["id"];?>">
      <input type="hidden" name="actualizarSesion" value="ok">
      <input type="text" name="editarUsuario" class="form-control" value="<?php echo $_SESSION["usuario"];?>" required/>
    </div>
    <div class="form-group">
      <input type="password" id="editarPassword" name="editarPassword" class="form-control" placeholder="Enter the password up to 10 characters" maxlength="10" value="<?php echo $pwd; ?>" required/>
      <input type='checkbox' id='mostrar_contrasena'>Mostrar Contrase&ntilde;a</br>
    </div>
    <div class="form-group">
      <input type="email" name="editarEmail" class="form-control" value="<?php echo $_SESSION["email"];?>" required/>
    </div>
    <div class="form-group text-center">
      <img src="<?php echo $_SESSION["photo"];?>" width="20%" class="img-circle">
      <input type="hidden" name="editarPhoto" value="<?php echo $_SESSION["photo"];?>">
      <input type="file" id="cambiarFotoPerfil" class="btn btn-default" style="display: inline-block; margin: 10px 0">
      <p class="text-center" style="font-size: 12px">Recommended image size: 100px * 100px, maximum weight of 2MB</p>
    </div>
    <input type="submit" id="actualizarPerfil" value="Update profile" class="btn btn-primary">
  </form>  
</div>

<!-- ================================== 
Crear perfil
====================================-->
<?php 
    $crearPerfil = new GestorPerfiles();
    $crearPerfil -> editarPerfilController();
  ?>
	<hr>
</div>

<!--====  Fin de PERFIL  ====-->