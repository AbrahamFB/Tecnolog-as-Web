<?php
    include("encabezado.inc.php"); 
    $nombrePersona = $_POST["nombre"];
    $edadPersona = $_POST["edad"];
    $sexoPersona = $_POST["sexo"];
   
       
       if(($edadPersona >= 18) && ($edadPersona <=35 )){
           if($sexoPersona == 'Masculino'){
            echo "Hola, ", $_POST["nombre"], ". Bienvenido al sistema.";
           }
           else{
               echo "Hola, ", $_POST["nombre"], ". Bienvenida al sistema.";
           }
       }
       else{
           echo $_POST["nombre"], "<br>", "No cuentas con la edad requerida por el sistema.";
       } 
       
    require_once("pie.inc.php");
?>
