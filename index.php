<?php
#El INDEX: En el mostraremos la salida de las vistas al usuario y tambiên a traves de el enviaremos las distintas acciones que el usuario envie al controlador.
require_once "controladores/plantilla.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> crtTraerPlantilla();