<?php
    class plantilla{
        private $prSeccion;
        private $priSeccionD;
        private $segSeccionD;

        public function __construct($prSeccion="", $priSeccionD="", $segSeccionD=""){
            $this->prSeccion = $prSeccion;
            $this->priSeccionD = $priSeccionD;
            $this->segSeccionD = $segSeccionD;
        }

        public function setPrSeccion($pSeccion){
            $this->prSeccion = $pSeccion;
        }
        public function setPriSeccionD($priSeccionD) {
            $this->priSeccionD = $priSeccionD;
        }
        public function setSegSeccionD($sSeccionD) {
            $this->segSeccionD = $sSeccionD;
        }
        
        public function getPrSeccion() {
            return $this->prSeccion;
        }
        public function getPriSeccionD() {
            return $this->priSeccionD;
        }
        public function getSegSeccionD() {
            return $this->segSeccionD;
        }

        public function PrimeraSeccion(){
            $prSeccion= "<h1>MUCHAS GRACIAS</h1>
            <p>Gracias por entrar al concurso de Tenis Forcefield&#169; 'Chidos mis Tenis'. Hemos recibido la siguiente información de tu registro:</p>";
            echo $prSeccion;
        }
        
        public function PrimeraSeccionD(){
            $base=new ConexionBD;
            $base->insertar($_GET["username"], $_GET["telephone"], $_GET["story"], $_GET["emailaddress"]);

            $datos=$base->consuCorreo($_GET['emailaddress']);
            //$info=$base->verificar($_GET['emailaddress']);
            

            $priSeccionD = "<h2>Acerca de ti:</h2>
            <ul>
                <li><strong>Tiempo de Registro:  </strong> <em>" . $datos['fecha_registro']. "</em></li>
                <li><strong>Nombre:  </strong> <em>" . $datos['nombre']. "</em></li>
                <li><strong>E-mail: </strong> <em>" . $datos["email"] . "</em></li>
                <li><strong>Télefono: </strong> <em>" . $datos['telefono'] . "</em></li>
            </ul>

            <p><strong>Tu triste historia:</strong> <em>" . $datos['historia'] . "</em></p>";
            echo $priSeccionD;
        }

        public function SegundaSeccionD(){
            $base=new ConexionBD;
            //$base->insertarDisenio($_GET["color"], $_GET["size"]);
            $datos=$base->consuCorreoDisenio($_GET['emailaddress']);
            
           // $result=mysqli_query($conexion,$sql);
            $i = 1;
            $cara='';
            $caracteristicas=$base->consuCorreoDisenioCar($_GET['emailaddress']);
 
                
                    $conexion = new mysqli("localhost", "root", "localhost", "tecnologiasweb_p05");
                    $checkbox = $_GET['features'];
                    $query2 = "SELECT `id_disenio` FROM `disenio` WHERE id_disenio=LAST_INSERT_ID()";
                    
                    $idUltDisenio =$conexion->query($query2);
                    $idLast=$idUltDisenio->fetch_array(MYSQLI_ASSOC);
                    $val="";
                   // $idLastDis= $idLast['id_disenio']. "numerito";
                    foreach($checkbox as $llave => $valor){
                        
                        //echo "Valor: ".$valor;
                        
                        
                        $query2 = "SELECT * FROM `disenio` WHERE 1;";
                        if($conexion->query($query2) === TRUE){
                          //  echo "<p>Se inserto carac</p>";
                          
                        }
                      //  else echo "no";
                        $val .= "<li><strong>Caracteristicas $i: </strong> <em>" . $valor . "</em></li> ";
                        $i++;
                    }
        
        
    
    
            $segSeccionD = "<h2>Tu diseño de Tenis (si ganas)</h2>
            <li><strong>Color: </strong> <em>" . $datos['color'] . "</em></li>
           

            <li><strong>Talla: </strong> <em>" . $datos['talla'] . "</em></li>
             <p>$val</p>";

            echo $segSeccionD;
        }
        public function crearSecciones(){
            $this->PrimeraSeccion();
            $this->PrimeraSeccionD();
            $this->SegundaSeccionD();
        }
    }
?>