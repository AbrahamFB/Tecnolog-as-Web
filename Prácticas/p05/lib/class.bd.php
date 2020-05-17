<?php
    
    class ConexionBD{
        private $host_db;
        private $user_db;
        private $pass_db;
        private $db_name;
        private $tbl_name;
        private $conexion;
        public function __construct($host_db="localhost", $user_db="root", $pass_db="localhost", $db_name="tecnologiasweb_p05") {
            $this->host_db = $host_db;
            $this->user_db = $user_db;
            $this->pass_db = $pass_db;
            $this->db_name = $db_name;
            $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
           // echo "Si";
           // $this->tbl_name = $tbl_name;
        }

        public function setHost($host) {
            $this->host_db = $host;
        }
        public function setUser($user) {
            $this->user_db = $user;
        }
        public function setPass($pass) {
            $this->pass_db = $pass;
        }
        public function setName($name) {
            $this->db_name = $name;
        }
     /*   public function setTName($tabla_name) {
            $this->tbl_name = $tabla_name;
        }*/

        public function getHost() {
            return $this->host_db;
        }
        public function getUser() {
            return $this->user_db;
        }
        public function getPass() {
            return $this->pass_db;
        }
        public function getName() {
            return $this->db_name;
        }
        public function getTName() {
            return $this->tbl_name;
        }

        public function consuCorreo($correo) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
            $query = "SELECT `id_cliente`, `nombre`, `telefono`, `historia`, `fecha_registro`, `eliminado`,
            `email` FROM `datos_cliente` WHERE email='$_GET[emailaddress]'";

            
            $result=mysqli_query($conexion,$query);

            /*echo "<table border='1' >";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Telefono</td>";
            echo "<td>Historia</td>";
            echo "<td>Fecha Registro</td>";
            echo "<td>Correo</td>";
    
            echo "</tr>";
            
            
             while($mostrar=mysqli_fetch_array($result)){
                ?>      
                    <tr>
                    <td><?php $nombrecito = $mostrar['nombre'];echo $nombrecito ?></td>
                    <td><?php $apellidito = $mostrar['telefono']; echo $apellidito ?></td>
                    <td><?php $dir = $mostrar['historia']; echo $dir ?></td>
                    <td><?php $ciud = $mostrar['fecha_registro']; echo $ciud ?></td>
                    <td><?php $cpo = $mostrar['email']; echo $cpo ?></td>
               
                    </tr>
                    <?php 
                }
                
            echo "</table>";*/
                $mostrar=mysqli_fetch_array($result);
              
                return $mostrar;
        }

        public function consuCorreoDisenio($correo) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
            $query = "SELECT  color,talla FROM disenio as d INNER JOIN datos_cliente  as dc
            on d.id_cliente=dc.id_cliente WHERE email='$_GET[emailaddress]'";   

            
            $result=mysqli_query($conexion,$query);

            /*echo "<table border='1' >";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Telefono</td>";
            echo "<td>Historia</td>";
            echo "<td>Fecha Registro</td>";
            echo "<td>Correo</td>";
    
            echo "</tr>";
            
            
             while($mostrar=mysqli_fetch_array($result)){
                ?>      
                    <tr>
                    <td><?php $nombrecito = $mostrar['nombre'];echo $nombrecito ?></td>
                    <td><?php $apellidito = $mostrar['telefono']; echo $apellidito ?></td>
                    <td><?php $dir = $mostrar['historia']; echo $dir ?></td>
                    <td><?php $ciud = $mostrar['fecha_registro']; echo $ciud ?></td>
                    <td><?php $cpo = $mostrar['email']; echo $cpo ?></td>
               
                    </tr>
                    <?php 
                }
                
            echo "</table>";*/
                $mostrar=mysqli_fetch_array($result);
              
                return $mostrar;
        }

        public function consuCorreoDisenioCar($correo) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
            $query = "SELECT  caracteristica FROM caracteristicas as c INNER JOIN disenio  as d on c.id_disenio=d.id_disenio
            INNER JOIN datos_cliente as dc on d.id_cliente=dc.id_cliente
             WHERE email='$_GET[emailaddress]'";   

            
            $result=mysqli_query($conexion,$query);

            /*echo "<table border='1' >";
            echo "<tr>";
            echo "<td>Nombre</td>";
            echo "<td>Telefono</td>";
            echo "<td>Historia</td>";
            echo "<td>Fecha Registro</td>";
            echo "<td>Correo</td>";
    
            echo "</tr>";
            
            
             while($mostrar=mysqli_fetch_array($result)){
                ?>      
                    <tr>
                    <td><?php $nombrecito = $mostrar['nombre'];echo $nombrecito ?></td>
                    <td><?php $apellidito = $mostrar['telefono']; echo $apellidito ?></td>
                    <td><?php $dir = $mostrar['historia']; echo $dir ?></td>
                    <td><?php $ciud = $mostrar['fecha_registro']; echo $ciud ?></td>
                    <td><?php $cpo = $mostrar['email']; echo $cpo ?></td>
               
                    </tr>
                    <?php 
                }
                
            echo "</table>";*/
                $mostrar=mysqli_fetch_array($result);
              
                return $mostrar;
        }

        

        public function insertar($nombre,$telefono,$historia,$email) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
            $buscarUsuario = "SELECT * FROM datos_cliente WHERE email = '$_GET[emailaddress]'";

            $result = $conexion->query($buscarUsuario);

            $count = mysqli_num_rows($result);
            if ($count == 1) {
                //echo "<img src='https://arandasoft.com/wp-content/uploads/2017/02/os-usuarios-jamas-ha-hecho-una-copia-de-seguridad.jpg ' class='perfil' align='right' width='300px'>"; 
                $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

                if ($conexion->connect_error) {
                    die("La conexion falló: " . $conexion->connect_error);
                }

                //echo "<br />". "El correo ya se registró." . "<br />";
                $query = "SELECT `id_cliente`, `nombre`, `telefono`, `historia`, `fecha_registro`, `eliminado`,
                `email` FROM `datos_cliente` WHERE email='$_GET[emailaddress]'";
               
               $consulta=$conexion->query($query);

                //if($conexion->error === FALSE){
                    @$datos=$consulta->fetch_array(MYSQLI_ASSOC);
                    echo "<h1>Lo sentimos pero ya participas en el concurso</h1>";

                   /* echo "<h2>Fecha de registro: </h2>" . $datos["fecha_registro"];
                    echo "<p>Nombre: " . $datos['nombre'] . "</p>";
                    echo "<p>Teléfono: " . $datos["telefono"] . "</p>"; 
                    echo "<p>Historia: " . $datos["historia"] . "</p>";
                    echo "<p>Correo: " . $datos["email"] . "</p>";*/
               // }
            }
            else{
                $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

                if ($conexion->connect_error) {
                    die("La conexion falló: " . $conexion->connect_error);
                }

                $query = "INSERT INTO `datos_cliente`(`nombre`, `telefono`, `historia`,
                `eliminado`, `email`) VALUES ('$_GET[username]','$_GET[telephone]','$_GET[story]', '0', '$_GET[emailaddress]')";
               
               $query1 = "INSERT INTO `disenio` (`id_cliente`, `color`, `talla`) VALUES
                    (LAST_INSERT_ID(), '$_GET[color]', '$_GET[size]')";

                if ($conexion->query($query) === TRUE) {
                  //  echo "<p>Se insertó correctamnete</p>";
                    
                    if($conexion->query($query1) === TRUE){
                        //echo "<p>Se inserto</p>";
                    }
                    else echo "no";
                    
                    //$ejecutar_inser=mysqli_query($conexion, $query1); 
                    
                        $checkbox = $_GET['features'];
                        $query2 = "SELECT `id_disenio` FROM `disenio` WHERE id_disenio=LAST_INSERT_ID()";
                        
                        $idUltDisenio =$conexion->query($query2);
                        $idLast=$idUltDisenio->fetch_array(MYSQLI_ASSOC);

                        $idLastDis= $idLast['id_disenio']. "numerito";
                        foreach($checkbox as $llave => $valor){
                            //echo "Valor: ".$valor. ", ";
                            $query2 = "INSERT INTO `caracteristicas` (`id_disenio`, `id_caracteristica`,
                            `caracteristica`) VALUES ('$idLastDis', NULL, '$valor');";
                            if($conexion->query($query2) === TRUE){
                               // echo "<p>Se inserto carac</p>";
                            }
                           // else echo "no";
                        }
                        
                }
                else{
                    //echo "<p>No se insertó</p>" . $conexion->error;
                }
            }
        }
        

/*        public function insertarDisenio($color, $caracteristicas, $talla) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }

                //echo "<img src='https://arandasoft.com/wp-content/uploads/2017/02/os-usuarios-jamas-ha-hecho-una-copia-de-seguridad.jpg ' class='perfil' align='right' width='300px'>"; 
                $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

                if ($conexion->connect_error) {
                    die("La conexion falló: " . $conexion->connect_error);
                }   
                else{
                    
                   
                    
                    if ($conexion->query($query) === TRUE) {
                        echo "<p>Se insertó correctamnete</p>";
                    }
                    else{
                        echo "<p>No se insertó</p>" . $conexion->error;
                    }
                }
               
            
        }*/


        public function eliminar($id) {
            $query = "UPDATE `datos_cliente` SET eliminado='1' WHERE id_cliente='$id'";
            $conexion->query($query);
        }
        public function verificar($email) {
            $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }
            $buscarUsuario = "SELECT * FROM datos_cliente WHERE email = '$_GET[emailaddress]'";

            $result = $conexion->query($buscarUsuario);

            $count = mysqli_num_rows($result);
            if ($count == 1) {
                //echo "<img src='https://arandasoft.com/wp-content/uploads/2017/02/os-usuarios-jamas-ha-hecho-una-copia-de-seguridad.jpg ' class='perfil' align='right' width='300px'>"; 
                $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");

                if ($conexion->connect_error) {
                    die("La conexion falló: " . $conexion->connect_error);
                }

              //  echo "<br />". "El correo ya se registró." . "<br />";
                $query = "SELECT `id_cliente`, `nombre`, `telefono`, `historia`, `fecha_registro`, `eliminado`,
                `email` FROM `datos_cliente` WHERE email='$_GET[emailaddress]'";
               
               $consulta=$conexion->query($query);

                //if($conexion->error === FALSE){
                    return $datos=$consulta->fetch_array(MYSQLI_ASSOC);
                    
               // }
            }
        }

    }


?>