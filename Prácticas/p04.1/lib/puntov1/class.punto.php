<?php
namespace WEBTEC\API\V1;

class Punto {
    private $x;
    private $y;

    public function __construct($x=0, $y=0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($coorx) {
        $this->x = $coorx;
    }

    public function setY($coory) {
        $this->y = $coory;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function verPunto() {
        echo '('.$this->x.', '.$this->y.')';
    }

    public static function distancia($p1, $p2) {
        return sqrt( 
            pow($p2->getY()-$p1->getY(),2) + 
            pow($p2->getX()-$p1->getX(),2) 
        );
    }
}

?>