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
 WHERE nombre = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='form.html'>Por favor escoga otro Nombre</a>";
 }
 else{



 $query = "INSERT INTO datos_cliente (nombre,
    apellidos, dirección, ciudad, codigo_Postal)
    VALUES ('$_POST[username]', '$_POST[apellidos]', '$_POST[direccion]', '$_POST[ciudad]', '$_POST[codigoPostal]')";

/*
 $query = "INSERT INTO Usuarios (nombre_usuario, password)
           VALUES ('$_POST[username]', '$hash')";*/

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
echo $_POST['apellidos'].$_POST['direccion']. $_POST['ciudad'].$_POST['codigoPodtal'];
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>