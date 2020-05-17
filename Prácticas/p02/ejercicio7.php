<?php
    echo "<p>a. la versión de Apache y PHP, </p>";
    echo $_SERVER['SERVER_SIGNATURE'];

    echo "<p>b. el nombre del sistema operativo de tu servidor  </p>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>Forma 2:<br>";
    echo php_uname();
    echo PHP_OS;

    echo "<p>c. el idioma del navegador (cliente).</p>";
    echo $_SERVER["HTTP_ACCEPT_LANGUAGE"], "<br>";
?>