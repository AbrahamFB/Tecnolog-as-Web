<?php
    include("encabezado.inc.php"); 
    echo "<hr />";
 //   include_once("cuerpo.inc.php"); 
    echo "<h2> Ejercicio 1</h2 >";
    echo "<p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>";
    include_once("ejercicio1.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 2</h2 >";
    echo "<p>Proporcionar los valores de \$a, \$b, \$c como sigue:</p>";
    include_once("ejercicio2.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 3</h2 >";
    echo "<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
    verificar la evolución del tipo de estas variables (imprime todos los componentes del
    arreglo):</p>";
    include_once("ejercicio3.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 4</h2 >";
    echo "<p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
    la matriz \$GLOBALS de PHP.
    </p>";
    include_once("ejercicio4.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 5</h2 >";
    echo "<p>Dar el valor de las variables \$a, \$b, \$c al final del siguiente script:</p>";
    include_once("ejercicio5.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 6</h2 >";
    echo "<p>Dar y comprobar el valor booleano de las variables \$a, \$b, \$c, \$d, \$e y \$f y muéstralas usando la función.</p>";
    include_once("ejercicio6.php");
    unset($variable);

    echo "<hr />";
    echo "<h2> Ejercicio 7</h2 >";
    echo "<p>Usando la variable predefinida \$_SERVER, determina lo siguiente:</p>";
    include_once("ejercicio7.php");
    unset($variable);
    
   // require("cuerpo.html");
    require_once("pie.inc.php");
?>