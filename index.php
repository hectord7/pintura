<?php

require_once "models/gestorSlide.php";
require_once "models/gestorServicios.php";
require_once "models/gestorGaleria.php";
require_once "models/gestorVideo.php";
require_once "models/gestorMensajes.php";

require_once "controllers/template.php";
require_once "controllers/gestorSlide.php";
require_once "controllers/gestorServicios.php";
require_once "controllers/gestorGaleria.php";
require_once "controllers/gestorVideo.php";
require_once "controllers/gestorMensajes.php";

$template = new TemplateController();
$template -> template();