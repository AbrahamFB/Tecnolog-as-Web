<?php
    use WEBTEC\API\V1\Punto;
    require_once __DIR__ . './lib/puntov1/class.punto.php';

    $miPunto = new Punto;
    $miPunto->verPunto();
    echo '<br><br>';

    $miPunto->setX(2);
    $miPunto->setY(3);
    $miPunto->verPunto();
    echo '<br><br>';

    $otroPunto = new Punto(2,2);
    $otroPunto->verPunto();
    echo '<br><br>';

    echo 'La distancia entre miPunto y otroPunto'.
    'es:'.Punto::distancia($miPunto, $otroPunto);
?>