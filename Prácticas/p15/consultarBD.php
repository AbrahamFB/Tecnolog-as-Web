<?php
	header("Content-Type: text/plain"); 

	if(isset($_REQUEST['nombre']))
    	$nombre = $NOMBRE = $_REQUEST['nombre'];

 	if (!empty($nombre))
	{
		$link = new mysqli("localhost", "root", "", "tecnologiasweb_p04");	

		/* comprobar la conexión */
		if ($link->connect_errno) 
		{
		    echo "Falló la conexión ".$link->connect_error."<br/>";
		    exit();
		}

		/* Crear un array para devolver un conjunto de resultados */
		if ( $result2 = $link->query("SELECT * FROM datos_cliente WHERE nombre = '$nombre'") ) 
		{
			//echo "Se accedió con éxtio la tabla datos_clientes <br/>");
			$row = $result2->fetch_array(MYSQLI_ASSOC);

			if( isset($row) )
			{
				$data = array();
				// Se rellena el arreglo con la información
				foreach ( $row as $key => $value ) {
					$data[$key] = utf8_encode($value);
				}

				echo json_encode($data);
			}else
			{
				$data = array(
					'Id_cliente' => 'no se encontraron datos',
					'nombre' => 'no se encontraron datos',
					'apellidos' => 'no se encontraron datos',
					'direccion' => 'no se encontraron datos',
					'ciudad' => 'no se encontraron datos',
					'codigo_postal' => 'no se encontraron datos');

				echo json_encode($data);
			}

			$result2->free();
		}
		else
		{
			$data = array(
				'Id_cliente' => 'error en la consulta',
				'nombre' => 'error en la consulta',
				'apellidos' => 'error en la consulta',
				'direccion' => 'error en la consulta',
				'ciudad' => 'error en la consulta',
				'codigo_postal' => 'error en la consulta');

			echo json_encode($data);
		}

		$link->close();
	}else
	{
		$data = array(
			'Id_cliente' => 'no se encontraron datos',
			'nombre' => 'no se encontraron datos',
			'apellidos' => 'no se encontraron datos',
			'direccion' => 'no se encontraron datos',
			'ciudad' => 'no se encontraron datos',
			'codigo_postal' => 'no se encontraron datos');

		echo json_encode($data);
	}
?>	