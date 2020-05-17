<?php
    use WEBTEC\API\V1\Punto;
    use WEBTEC\API\V2\Punto as Punto2;

    require_once __DIR__ . './lib/puntov1/class.punto.php';
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

    echo 'La distancia entre miPunto y otroPunto'.
    'es:'.Punto::distancia($miPunto, $otroPunto);

    echo '<br><br>';
    echo '<hr>';
    echo '<br><br>';


    $miPunto = new Punto2;
    $miPunto->verPunto();
    echo '<br><br>';

    $miPunto->setX(2);
    $miPunto->setY(3);
    $miPunto->verPunto();
    echo '<br><br>';

    $otroPunto = new Punto2(2,2);
    $otroPunto->verPunto();
    echo '<br><br>';

    echo 'La distancia entre miPunto y otroPunto'.
    'es:'.Punto2::pendiente($miPunto, $otroPunto);
?>