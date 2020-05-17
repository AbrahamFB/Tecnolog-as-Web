<?php

    $edad=18;
    $sexo='Masculino';

    if(($edad >= 18) && ($edad <=35)){
        if($sexo === 'Masculino'){
            echo "Hola, Bienvenido al sistema.";
        }
        else{
            echo "Hola, Bienvenida al sistema.";
        }
    }
    else{
        echo "No cuentas con la edad requerida por el sistema.";
    }
?>