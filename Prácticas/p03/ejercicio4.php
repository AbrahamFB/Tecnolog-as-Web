<?php
    include("encabezado.inc.php"); 
    $miletra = "A";
    $letra = array();
        echo "<h1>Valos impresos con chr(\$i)</h1>";
        for ($i = 97; $i <= 122; $i++){
            $letra [$i] = $miletra;
            $miletra++;
           // print_r(($letra));
            echo "<p>[$i] => ", chr($i), "</p>";
        }
    echo "<h1>Valos impresos con var_dump(\$letra)</h1>";
    echo "<p>";
    var_dump($letra);
    echo "</p>";  
    
    echo "<h1>Valos impresos con  foreach (\$letra as \$numero => \$letrita)</h1>";
    
    // Creamos la tabla
    $html = '<table border>';
        foreach ($letra as $numero => $letrita) {
            $html .= '<tr>'.'<td>'.$numero.'</td>' . '<td>=></td>'.'<td>' .$letrita .'</td>'.'</tr>';
       }

       $html .= '</table>';
    
       echo $html;

       require_once('pie.inc.php');

?>  