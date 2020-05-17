<?php
    include("encabezado.php");
    require_once("class.bd.php");

    require_once("class.plantilla.php");
    $plantilla = new plantilla;
    $plantilla->PrimeraSeccion();

    require_once("class.informacion.php");
    $Informacion = new Informacion;
    
    require_once("class.disenio.php");
    $disenio = new disenio;

    require_once("pie.php");
?>