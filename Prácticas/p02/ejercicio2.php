<?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;    

    echo "<p>\$a = \"ManejadorSQL\";<br>";
    echo "\$b = 'MySQL’;<br>";
    echo "\$c = &\$a;</p>";
    

    echo "<p>a. Ahora muestra el contenido de cada variable</p>";
    echo $a, "<br>";
    echo $b, "<br>";
    echo $c, "<br>";

    echo "<p>b. Agrega al código actual las siguientes asignaciones:</p>";
    echo "<p>\$a = \"PHP server\";
    <br>\$b = &\$a;</p>";
    $a = "PHP server";
    $b = &$a;

    echo "<p>c. Vuelve a mostrar el contenido de cada uno</p>";
    echo $a, "<br>";
    echo $b, "<br>";

    echo "<p>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
    asignaciones
    </p>";
    echo "<p>Se mostró el valor de \$b que esta guardado en la dirección &\$a</p>"
?>