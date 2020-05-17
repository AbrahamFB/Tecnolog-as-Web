<!DOCTYPE html>
<html>
<head>
	<title>Datos del Usuario</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Dirección</td>
            <td>Correo</td>	
            <td>Contraseña</td>
		</tr>

		<?php 
			$conexion=mysqli_connect('localhost','root','localhost','tecnologiasweb_p04');

        $sql="SELECT * FROM `datos_cliente` ORDER BY `Id_cliente`";

		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		?>
            <tr>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['dirección'] ?></td>
                <td><?php echo $mostrar['correo'] ?></td>
                <td><?php echo $mostrar['contraseña'] ?></td>
            </tr>
	        <?php 
	    }
	    ?>
	</table>

</body>
</html>