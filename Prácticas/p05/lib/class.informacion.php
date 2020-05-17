<?php
    class Informacion{
        private $nombre;
        private $email;
        private $telefono;
        private $historia;
    

        public function __construct($nombre="", $email="", $telefono="", $historia=""){
            $this->nombre = $nombre;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->historia = $historia;
            
            $base=new ConexionBD;
            $base->insertar($_GET["username"], $_GET["telephone"], $_GET["story"], $_GET["emailaddress"]);

            $datos=$base->consuCorreo($_GET['emailaddress']);
            $info=$base->verificar($_GET['emailaddress']);
            

            $priSeccionD = "<h2>Acerca de ti:</h2>
            <ul>
                <li><strong>Nombre:  </strong> <em>" . $datos['nombre']. "</em></li>
                <li><strong>E-mail: </strong> <em>" . $datos["email"] . "</em></li>
                <li><strong>Télefono: </strong> <em>" . $datos['telefono'] . "</em></li>
            </ul>

            <p><strong>Tu triste historia:</strong> <em>" . $datos['historia'] . "</em></p>";
            echo $priSeccionD;

        }

        public function setNombre($infoNombre){
            $this->nombre = $infoNombre;
        }
        public function setEmail($infoEmail){
            $this->email = $infoEmail;
        }
        public function setTelefono($infoTelefono){
            $this->telefono = $infoTelefono;
        }
        public function setHistoria($infoHistoria){
            $this->historia = $infoHistoria;
        }

        
        public function getNombre() {
            return $this->nombre;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getTelefono() {
            return $this->telefono;
        }
        public function getHistoria() {
            return $this->historia;
        }
        
    }

?>
