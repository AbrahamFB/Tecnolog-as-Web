<?php

    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "localhost";
    $db_name = "tecnologiasweb_p04";
    $tbl_name = "datos_cliente";
 
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }

    $buscarUsuario = "SELECT * FROM $tbl_name
    WHERE nombre = '$_POST[username]'";

    $result = $conexion->query($buscarUsuario);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<img src='https://arandasoft.com/wp-content/uploads/2017/02/os-usuarios-jamas-ha-hecho-una-copia-de-seguridad.jpg ' class='perfil' align='right' width='300px'>"; 
        echo "<br />". "El Nombre ya existe en la Base de Datos." . "<br />";
    }
    else{
        $query = "INSERT INTO datos_cliente (nombre, apellidos, dirección, ciudad, codigo_Postal) VALUES ('$_POST[username]', '$_POST[apellidos]', '$_POST[direccion]', '$_POST[ciudad]', '$_POST[codigoPostal]')";
        
        if ($conexion->query($query) === TRUE) {
            include("encabezado.inc.php");
            echo "<br />" . "<h1>" . "Usuario Creado Exitosamente!" . "</h1>";
            echo "<img src='https://disenopaginasweb.club/wp-content/uploads/2019/04/usuario.png' class='perfil' align='right' width='300px'>"; 
            echo "<h2>" . "Bienvenido: </h2>" . "<h3>" . $_POST['username'] . " " . $_POST['apellidos'] . "</h3>" . "\n\n";
            echo "<h2>Dirección: </h2>" . " " . $_POST['direccion'];
            echo "<h2>Ciudad: </h2>" . " " . $_POST['ciudad'];
            echo "<h2>Código Postal: </h2>" . " " . $_POST['codigoPostal'];
            echo "<h5>" . "Ingresar otro Usuario: " . "<a href='index5.html'>Login</a>" . "</h5>";
            require_once("pie.inc.php");
        }
        else {
            echo "Error al insertar el usuario." . $query . "<br>" . $conexion->error; 
        }
 }
 mysqli_close($conexion);
?>