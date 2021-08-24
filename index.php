<?php

//controladores

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/control.controlador.php";

//modelos
require_once "modelos/control.modelo.php";
require_once "modelos/usuarios.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();