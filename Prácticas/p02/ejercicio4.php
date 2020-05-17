<?php
    $a = "PHP5";
  echo $GLOBALS["a"], "<br>";
        
    $z[] = &$a;
    echo print_r($GLOBALS['z']);
    echo "<br>";

    $b = "5a version de PHP";
    echo $GLOBALS["b"];

    $c = (int)$b * 10;
    echo "Con var_dump(\$c) ";
    var_dump($c);
    echo "<br>", $GLOBALS["c"], "<br>";

    $a .= $b;
    echo $GLOBALS["a"], "<br>";
    
    $b *= $c;
    echo $GLOBALS["b"], "<br>";
    
    $z[0] = "MySQL";
    echo print_r($GLOBALS['z']);
    echo "<br>";
?>