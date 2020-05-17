<?php

    $a = "PHP5";
    echo $a, "<br>";

    $z[] = &$a;
    print_r($z);
    echo "<br>";

    $b = "5a version de PHP";
    echo $b, "<br>";

    $c = (int)$b * 10;
    echo "Con var_dump(\$c) ";
    var_dump($c);
    echo "<br>", $c, "<br>";

    $a .= $b;
    echo $a, "<br>";
    
    $b *= $c;
    echo $b, "<br>";
    
    $z[0] = "MySQL";
    print_r($z);
    echo "<br>";

?>