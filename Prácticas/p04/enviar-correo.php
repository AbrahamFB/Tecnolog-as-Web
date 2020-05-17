<?php
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
    $mail->setFrom('afb1603@gmail.com', 'Abraham');
    $mail->addAddress('afb16031999@gmail.com', 'Abraham TESTEO');     // Add a recipient

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

     
    $sql="SELECT * FROM `datos_cliente` ORDER BY `Id_cliente`";

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
        echo $apellidito;
    }
    
echo "</table>";
 mysqli_close($conexion);
 echo $apellidito;

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto';
    $mail->Body    = "<p>Nombre: " . $nombrecito . "</p><p>Apellido: " . $apellidito .
    "</p><p>Dirección: " . $dir . "</p><p>Ciudad: " . $ciud . "</p><p>Código Postal: " . $cpo .
    "</p><p>Clave Cliente: " . $cc . "</p><p>Correo Electrónico: " . $cor . "</p><p>Contraseña: " .
    $con . "</p>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "El mensaje no se envió correctamente. Mailer Error: {$mail->ErrorInfo}";
}

?>