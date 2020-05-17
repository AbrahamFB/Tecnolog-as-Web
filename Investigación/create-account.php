<!doctype html>
<html lang="en">
  <head>
    <title>Crear cuenta en la base de datos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<div class="container">

	<?php

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Verifica la conexión
	if (!$conn) {
		die("La conexión fallida: " . mysqli_connect_error());
	}
	
	// Consulta para verificar si el correo electrónico ya existe
	$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";

	// La variable $result contiene los datos de conexión y la consulta
	$result = $conn-> query($checkEmail);

	// La Variable $count retiene el resultado de la consulta
	$count = mysqli_num_rows($result);

	// Si count == 1 eso significa que el correo electrónico ya está en la base de datos
	if ($count == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>Ese correo electrónico ya está en nuestra base de datos..</p>
					<p><a href='login.html'>Por favor inicie sesión aquí</a></p>
				</div>";
	} else {	
	
	/*
	Si el correo electrónico no existe, los datos del formulario se envían a
	base de datos y se crea la cuenta
	*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	// La función password_hash() convierte la contraseña en un hash antes de enviarla a la base de datos
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Consulta para enviar hash de nombre, correo electrónico y contraseña a la base de datos
	$query = "INSERT INTO users (Name, Email, Password) VALUES ('$name', '$email', '$passHash')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success mt-4' role='alert'><h3>Your account has been created.</h3>
		<a class='btn btn-outline-primary' href='login.html' role='button'>Login</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>