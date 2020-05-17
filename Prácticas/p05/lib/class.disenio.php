<?php

    class disenio{
        private $color;
        private $caracteristicas;
        private $talla;

        public function __construct($color="", $caracteristicas="", $talla=""){
            $this->color = $color;
            $this->caracteristicas = $caracteristicas;
            $this->talla = $talla;

            $base=new ConexionBD;
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

        
        public function setColor($disenioColor){
            $this->color = $disenioColor;
        }
        public function setCaracteristicas($disenioCaracteristicas){
            $this->caracteristicas = $disenioCaracteristicas;
        }
        public function setTalla($disenioTalla){
            $this->talla = $disenioTalla;
        }

        
        public function getColor() {
            return $this->color;
        }
        public function getCaracteristicas() {
            return $this->caracteristicas;
        }
        public function getTalla() {
            return $this->talla;
        }


    }
?>