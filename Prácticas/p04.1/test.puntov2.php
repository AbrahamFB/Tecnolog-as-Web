<?php
    use WEBTEC\API\V2\Punto;
    require_once __DIR__ . './lib/puntov2/class.punto.php';

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

    echo 'La pendiente entre miPunto y otroPunto'.
    'es: '.Punto::pendiente($miPunto, $otroPunto);
?>