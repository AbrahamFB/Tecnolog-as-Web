<?php
  $host_db = "localhost";
  $user_db = "root";
  $pass_db = "localhost";
  $db_name = "tecnologiasweb_p04";
  $tbl_name = "acceso_cliente";

  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
      die("La conexion falló: " . $conexion->connect_error);
  }
  echo "bien";
  $query = "INSERT INTO acceso_cliente (correo, contraseña) VALUES ('sd', 'df')";


  $conexion->query($query);

printf ("Nuevo registro con el id %d.\n", $conexion->insert_id);

?>