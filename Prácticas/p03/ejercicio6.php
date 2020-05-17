<?php
  include("encabezado.inc.php"); 

  $sexoPersona = $_POST["sexo"];

  if($sexoPersona == 'Masculino'){
    echo "<h1>Hola, Bienvenido al sistema.</h1>";
   }
  else{
       echo "<h1> Hola, Bienvenida al sistema.</h1>";
  }

  
  $matriculaAuto = $_POST["matri"];

 // $vehiculos = array();
  $vehiculos = Array (
    "UBN6338" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2020", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Alfonzo Esparza", "ciudad" => "Puebla, Pue.", "direccion"
        => "C.U., Jardines de San Manuel"
      )
      ),
      "OEL1902" =>
    Array (
      "Auto" => Array (
      "marca" => "TOYOTA", "modelo" => "2020", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Abraham Flores Basilio", "ciudad" => "San Pedro Cholula, Pue.", "direccion"
        => "Calle Puebla, No. 51, Momoxpan"
      )
      ),
      "RTD3628" =>
    Array (
      "Auto" => Array (
      "marca" => "NISSAN", "modelo" => "2020", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Gerardo Martínez Hernández", "ciudad" => "Valle, Pue.", "direccion"
        => "Valle de Juárez, Amalucan"
      )
      ),
      "RUD2046" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2019", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Lizbeth Ortega Muñoz", "ciudad" => "Bosques, Pue.", "direccion"
        => "Valle de Juárez, Amalucan"
      )
      ),
      "EIS1041" =>
    Array (
      "Auto" => Array (
      "marca" => "MAZDA", "modelo" => "2019", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Adina Bacilio Chimal", "ciudad" => "San Pedro Cholula, Pue.", "direccion"
        => "Calle Puebla, No. 51, Momoxpan"
      )
      ),
      "EPA2548" =>
    Array (
      "Auto" => Array (
      "marca" => "NISSAN", "modelo" => "2010", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Azareel Lucas González", "ciudad" => "San Ándres Timilpan, Méx.", "direccion"
        => "Venustiano Carranza, Centro"
      )
      ),
      "WPS3749" =>
    Array (
      "Auto" => Array (
      "marca" => "FORD", "modelo" => "2019", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Armado Ríos Acevedo", "ciudad" => "Puebla, Pue.", "direccion"
        => "C.U., Jardines de San Manuel"
      )
      ),
      "WPS2019" =>
    Array (
      "Auto" => Array (
      "marca" => "BMW", "modelo" => "2019", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Juan González Callero", "ciudad" => "Puebla, Pue.", "direccion"
        => "San Ánderes Cholula, Cholula"
      )
      ),
      "RPQM9103" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2020", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Ana Claudia Vázquez Zenteno", "ciudad" => "Puebla, Pue.", "direccion"
        => "Centro, Puebla"
      )
      ),
      "WIZ2530" =>
    Array (
      "Auto" => Array (
      "marca" => "NISSAN", "modelo" => "2010", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Raquel Bacilio Castañeda", "ciudad" => "San Ándres Timilpan, Méx.", "direccion"
        => "Segunda Manzana de Barrio Hidalgo, Timilpan"
      )
      ),
      "QPZ8163" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2020", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Alfonzo Esparza", "ciudad" => "Puebla, Pue.", "direccion"
        => "C.U., Jardines de San Manuel"
      )
      ),
      "TEY4184" =>
    Array (
      "Auto" => Array (
      "marca" => "FORD", "modelo" => "2016", "tipo" => "hachback"
      ),
      "Propietario" => Array (
        "nombre" => "María Bazurto Munguía", "ciudad" => "Cholula, Pue.", "direccion"
        => "Río Rabanillo, Cholula"
      )
      ),
      "EYA6218" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2018", "tipo" => "sedan"
      ),
      "Propietario" => Array (
        "nombre" => "Damaris Quiroz Cuatle", "ciudad" => "Puebla, Pue.", "direccion"
        => "C.U., Jardines de San Manuel"
      )
      ),
      "WIP2549" =>
    Array (
      "Auto" => Array (
      "marca" => "HONDA", "modelo" => "2020", "tipo" => "camioneta"
      ),
      "Propietario" => Array (
        "nombre" => "Alejandro Miguel Taboada", "ciudad" => "Chepen, Perú.", "direccion"
        => "Trujillo, Perú"
      )
      ),
      "AFD7183" =>
    Array (
      "Auto" => Array (
      "marca" => "NISSAN", "modelo" => "2011", "tipo" => "hachback"
      ),
      "Propietario" => Array (
        "nombre" => "Gustavo Jiménez González", "ciudad" => "Santiaguito Maxda, Méx.", "direccion"
        => "Centro, Maxda"
      )
    )
  );

$busqueda = $matriculaAuto;

  if(array_key_exists($busqueda, $vehiculos)){
    echo "<h2>La matricula esta en nuestra Base de Datos</h2>";
    if($sexoPersona == 'Masculino'){
      echo "<h3>DATOS DEL PROPIETARIO</h3>";
     }
    else{
      echo "<h3>DATOS DE LA PROPIETARIA</h3>";
    }
    echo '<table border="10">';
    echo '<tr>';
    echo "<td style='background-color: #99DAFF'>Matricula: </td>", "<td style='background-color: #D7FBFF'>", $busqueda, "</td>";
    echo '</tr>';
    echo '<tr>';
    echo "<td style='background-color: #99DAFF'>Nombre: </td>", "<td style='background-color: #D7FBFF'>", $vehiculos[$busqueda]["Propietario"]['nombre'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td style='background-color: #99DAFF'>Ciudad: </td>", "<td style='background-color: #D7FBFF'>", $vehiculos[$busqueda]["Propietario"]['ciudad'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td style='background-color: #99DAFF'>Dirección: </td>", "<td style='background-color: #D7FBFF'>", $vehiculos[$busqueda]["Propietario"]['direccion'], '</td>';
    echo '</tr>';
    echo '</table>';

    echo '<table border="8">';
    echo "<h3>DATOS DEL VEHÍCULO</h3>";
    echo '<tr>';
    echo "<td style='background-color: #FF463B'>Marca: </td>", "<td style='background-color: #FFA6A3'>", $vehiculos[$busqueda]["Auto"]['marca'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td style='background-color: #FF463B'>Modelo: </td>", "<td style='background-color: #FFA6A3'>", $vehiculos[$busqueda]["Auto"]['modelo'], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td style='background-color: #FF463B'>Tipo: </td>", "<td style='background-color: #FFA6A3'>", $vehiculos[$busqueda]["Auto"]['tipo'], '</td>';
    echo '</tr>';
    echo '</table>';
    if($vehiculos[$busqueda]["Auto"]['tipo'] == "camioneta"){
      echo "<img src='camioneta.jpg'>";
    }else{
      if($vehiculos[$busqueda]["Auto"]['tipo'] == "sedan"){
        echo "<img src='sedan.jpg'";
      }
      if($vehiculos[$busqueda]["Auto"]['tipo'] == "hachback"){
        echo "<img src='hachback.jpg'>";
      }
    }
  }
  else{
    echo "<h2>La matricula NO esta en nuestra Base de Datos</h2>";
    echo '<p><a href="http://localhost/tecnologias-web/Pr%C3%A1cticas/p03/index6.html">Vuelve a intentarlo</a></p>';

  }
  
 
 
  require_once("pie.inc.php");
?>