<?php

    $a = "0";
    var_dump($a);
    echo "<br>";

    $b = "TRUE";
    var_dump($b);
    echo "<br>";
    
    $c = FALSE;
    var_dump($c);
    echo "<br>";    
    
    $d = ($a OR $b);
    var_dump($d);
    echo "<br>";    
    
    $e = ($a AND $c);
    var_dump($e);
    echo "<br>";    
    
    $f = ($a XOR $b);
    var_dump($f);
    echo "<br>";

    echo "<p>Después investiga una función de PHP que permita transformar el valor booleano de \$c y \$e
    en uno que se pueda mostrar con un echo:</p>";
    echo "<p>La función es:</p>";
    echo "<p>function boolNumber(\$bValue = false) {                      // returns integer
        <br>return (\$bValue ? 1 : 0);
    <br>}
    <br>function boolString(\$bValue = false) {                      // returns string
        <br>return (\$bValue ? 'true' : 'false');
    <br>}</p>";    
    function boolNumber($bValue = false) {                      // returns integer
        return ($bValue ? 1 : 0);
    }
    function boolString($bValue = false) {                      // returns string
        return ($bValue ? 'true' : 'false');
    }
    echo 'boolean $c AS string = ' . boolString($c) . '<br>';   // boolean as a string
    echo 'boolean $c AS int = ' . boolNumber($c) . '<br>';   // boolean as a number
    echo '<br>';
    
    $e = ($a AND $c);
    echo 'boolean $e AS string = ' . boolString($e) . '<br>';   // boolean as a string
    echo 'boolean $e AS int = ' . boolNumber($e) . '<br>';   // boolean as a number
    echo '<br>';


/*
    $a = array('a' => 'manzana', 'b' => 'platano', 'c' => array('x' , 'y' , 'z' ));
    print_r($a);
    echo "<br>";
    $a = array(1, 2, array("a","b","c"));
    var_dump($a);
*/
?>