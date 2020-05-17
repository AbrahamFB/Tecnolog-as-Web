<?php

    $ejeX = range( 1, 3 );
    $ejeY = range( 1, 1 );
    $veces =1;
    
    do {
        foreach ( $ejeY as $y ) {
            foreach ( $ejeX as $x ) {
                // Aquí creamos los ejes con un valor aleatorio
                $ejesYX[ $y ][ $x ] = rand( 100, 999 );
            }
        }
    
        // Creamos la tabla
        $html = '<table border>';
    
        foreach ( $ejesYX as $col_Y => $valores ) {
            foreach ( $valores as $val ) {
                // Creamos los campos de los valores
                $html .= '<td>'.$val.'</td>';
            }        
        }

        $html .= '</table>';
    
        echo $html;
        if($ejesYX[1][1] % 2 != 0 && $ejesYX[1][2] % 2 == 0 && $ejesYX[1][3] % 2 != 0){
            echo "impar par impar";
            $i=0;
        }
        else{
            @$veces++;
            $i = 10;
        }
    } while ($i == 10);
    echo "<p>Número de iteraciones: ", $veces, "</p>";
    echo "<p>Cantidad de número: ", $veces*3,"</p>";
?>