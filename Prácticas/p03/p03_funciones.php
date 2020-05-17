<?php
    include("encabezado.inc.php"); 
    
    echo "<hr />";
    echo "<h2> Ejercicio 1</h2 >";
    echo "<p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7.</p>";
    include_once("ejercicio1.php");
    unset($variable);   

    echo "<hr />";
    echo "<h2> Ejercicio 2</h2 >";
    echo "<p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
        secuencia compuesta por:</p>
        <p>impar, par, impar</p>";
    include_once("ejercicio2.php");
    unset($variable);   

    echo "<hr />";
    echo "<h2> Ejercicio 4</h2 >";
    echo "<p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice. Es decir:</p>";
    include_once("ejercicio4.php");
    unset($variable); 

    echo "<hr />";
    echo "<h2> Ejercicio 3</h2 >";
    echo "<p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>";
    include_once("ejercicio3.php");
    unset($variable);   

      


    //matricula, nombre, 
    //mostrar info deacuerdo a la matrícula
    echo '<p><a href="http://localhost/tecnologias-web/Pr%C3%A1cticas/p03/index5.html">Ejercicio 5</a></p>';
    echo '<p><a href="http://localhost/tecnologias-web/Pr%C3%A1cticas/p03/index6.html">Ejercicio 6</a></p>';
    require_once("pie.inc.php");
?>