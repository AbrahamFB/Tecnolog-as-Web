<?php
    include("encabezado.php");
    require_once("class.bd.php");
    require_once("class.plantilla.php");
    $plantilla = new plantilla;

    $plantilla->PrimeraSeccion();
    $plantilla->PrimeraSeccionD();
    $plantilla->SegundaSeccionD();

    require_once("pie.php");
?>