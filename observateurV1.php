<?php
class Gps {
    private $position;
    private $precision;

    public function __construct() {
        $this->position = 'inconnue';
        $this->precision = 0;
    }

    public function setMesures($position, $precision) {
        //simule une évolution des données du récepteur GPS
        $this->position = $position;
        $this->precision = $precision;
    }

    public function __toString() {
        return "position: " . $this->position . "  précision: " . $this->precision . "\n";
    }
}
//main 
$gps = new Gps();
$gps->setMesures("Nord 48,51,57 Ouest 2,30,0", 3);//latitude longitude 
echo $gps;
?>
