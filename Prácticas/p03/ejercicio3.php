<?php
    $numero= $_GET["num"];
    srand(time());
    $estado = false;
    $valor = rand(0, 1000);

    echo "<p><h1>Intentos</h1></p>";
    do {
        echo "[", $valor,"], ";
        $valor = rand(0, 1000);
        $i=10;
        @$j++;
        if($valor % $numero == 0){
            $i=1;
        }
        else{
            $i=10;
        }
    } while ($i == 10);
        echo "<p>Número de intentos: $j</p>";
        echo "<p>El múltiplo de $numero es</p>";
        echo "<p><h2>",$valor," </h2></p>";

   /* $numero= $_GET["num"];
    srand(time());
    $estado = false;
    $valor = rand(0, 1000);
    $i=10;
    while ($i == 10){
        echo $valor," ";
        $valor = rand(0, 1000);
           
        if($valor % $numero == 0){
            $i=1;
        }
        else{
            $i=10;
        }
   }   */  
?>