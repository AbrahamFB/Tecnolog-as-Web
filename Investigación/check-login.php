<?php
session_start();
?>

<!doctype html>
<html lang="en">
	<head>
		<title>Verificar Iniciar sesión y crear sesión</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			//Conección al archivo .info
			include 'conn.php';	
			
			//Variables de conexión
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			//Checa la conección
			if (!$conn) {
				die("Conexión fallida: " . mysqli_connect_error());
			}
			
			// datos enviados desde el formulario login.html 
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Consulta enviada a la base de datos
			$result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");
			
			// La variable $ row retiene el resultado de la consulta
			$row = mysqli_fetch_assoc($result);
			
			// La variable $ hash contiene el hash de contraseña en la base de datos
			$hash = $row['Password'];
			
			/* 
			La función password_Verify() verifica si la contraseña ingresada por el usuario
			coincide con el hash de contraseña en la base de datos. Si todo está bien, la sesión
			se crea por un minuto. Cambie 1 en $ _SESSION[start] a 5 por una sesión de 5 minutos.
			*/
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['Name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				echo "<div class='alert alert-success mt-4' role='alert'><strong>Bienvenido!</strong> $row[Name]			
				<p><a href='edit-profile.php'>Editar perfil</a></p>	
				<p><a href='logout.php'>Cerrar Sesión</a></p></div>";	
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>El correo electrónico o la contraseña son incorrectos!
				<p><a href='login.html'><strong>Inténtalo de nuevo!</strong></a></p></div>";			
			}	
			?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>