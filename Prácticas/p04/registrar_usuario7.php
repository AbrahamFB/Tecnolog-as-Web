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
    //echo "bien";
    $buscarUsuario = "SELECT * FROM $tbl_name
    WHERE correo = '$_POST[email]'";

    $result = $conexion->query($buscarUsuario);

    $count = mysqli_num_rows($result);
    //echo $count;

    if ($count > 0) {
        echo "<img src='https://arandasoft.com/wp-content/uploads/2017/02/os-usuarios-jamas-ha-hecho-una-copia-de-seguridad.jpg ' class='perfil' align='right' width='300px'>"; 
        echo "<br />". "El correo Electrónico ya existe en la Base de Datos." . "<br />";

        echo "<a href='index7.html'>Por favor ingrese otra Correo Electrónico para el Acceso</a>";
    }
    else{
        //Carácteres para la contraseña
        $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $contGen = "";
        $password = "";
        for($i=0;$i<32;$i++) {
            //obtenemos un caracter aleatorio escogido de la cadena de caracteres
            $contGen .= substr($str,rand(0,62),1);
            $password = md5("$contGen");

        }

        $query = "INSERT INTO acceso_cliente (correo, contraseña) VALUES ('$_POST[email]', '$password')";

       // printf ("Nuevo registro con el id %d.\n", $conexion1->insert_id-30);
        
        if ($conexion->query($query) === TRUE) {
            include("encabezado.inc.php");
            echo "<h1>" . "Usuario Registrado Exitosamente!" . "</h1>";
            echo "<img src='https://disenopaginasweb.club/wp-content/uploads/2019/04/usuario.png' class='perfil' align='right' width='300px'>"; 
            echo "<h2>" . "Bienvenido: " . "$_POST[email] </h2>" . "\n\n";
            echo "<h3>" . "Tu contraseña generada automáticamente es: </h3><h3 style='background-color: #FF463B; color:black'>" . $contGen . "</h3>";
            echo "<h3>" . "La contraseña cifrada, que quedó guardada en el sistema es: </h3><h3 style='background-color: black; color:white'>" . $password . "</h3>";
            echo "<h5>" . "Ingresar otro Usuario: " . "<a href='index7.html'>Login</a>" . "</h5>"; 
            
            echo "<table border='1' >";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Apellidos</td>";
            echo "<td>Dirección</td>";
            echo "<td>Ciudad</td>";
            echo "<td>Código Postal</td>";
            echo "<td>Clave Cliente</td>";
            echo "<td>Correo</td>";
            echo "<td>Contraseña</td>";
            echo "</tr>";
    
             
            $sql="SELECT datos_cliente.nombre, datos_cliente.apellidos, datos_cliente.dirección, datos_cliente.ciudad, datos_cliente.codigo_Postal,
            datos_cliente.clave_cliente, acceso_cliente.correo, acceso_cliente.contraseña FROM datos_cliente INNER JOIN acceso_cliente on
            acceso_cliente.Id_correo=datos_cliente.Id_cliente ORDER by Id_correo DESC LIMIT 1";
    
            $result=mysqli_query($conexion,$sql);
    
            while($mostrar=mysqli_fetch_array($result)){
            ?>      
                <tr>
                <td><?php $nombrecito = $mostrar['nombre'];echo $nombrecito ?></td>
                <td><?php $apellidito = $mostrar['apellidos']; echo $apellidito ?></td>
                <td><?php $dir = $mostrar['dirección']; echo $dir ?></td>
                <td><?php $ciud = $mostrar['ciudad']; echo $ciud ?></td>
                <td><?php $cpo = $mostrar['codigo_Postal']; echo $cpo ?></td>
                <td><?php $cc = $mostrar['clave_cliente']; echo $cc?></td>
                <td><?php $cor = $mostrar['correo']; echo $cor ?></td>
                <td><?php $con = $mostrar['contraseña']; echo $con?></td>
                </tr>
                <?php 
            }
            
        echo "</table>";

        }
        else {
            echo "Error al insertar el correo." . $query . "<br>" . $conexion->error; 
        }
    }

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'afb1603@gmail.com';                     // SMTP username
    $mail->Password   = 'Izucar de Matamoros';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('afb1603@gmail.com', 'Abraham Práctica 4');
    //echo $cor;
    $mail->addAddress(@$cor, @$nombrecito);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Hola ". $nombrecito . ", Bienvenido a Nuestro Sistema";
    $mail->Body    = "<body background='https://fondopantalla.com.es/file/421/2560x1440/crop/fondo-de-pantalla-degradado-azul.jpg'>" . "<h1>Datos del Usuario</h1><br />" . "<img src='https://disenopaginasweb.club/wp-content/uploads/2019/04/usuario.png' class='perfil' align='right' width='300px'>" . "<p>Nombre: " . $nombrecito . "</p><p>Apellido: " . $apellidito .
    "</p><p>Dirección: " . $dir . "</p><p>Ciudad: " . $ciud . "</p><p>Código Postal: " . $cpo .
    "</p><p>Clave Cliente: " . $cc . "</p><p>Correo Electrónico: " . $cor . "</p><p>Contraseña: " .
    $contGen . "</p>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'El mensaje se envió correctamente';
    } catch (Exception $e) {
        echo "<p>El mensaje no se envió correctamente.</p>";
    }
    
 mysqli_close($conexion);
 require_once("pie.inc.php");
?>