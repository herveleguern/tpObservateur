<?php
class Gps {
    private $position;
    private $precision;
    private $unAfficheur;

    public function __construct() {
        $this->position = 'inconnue';
        $this->precision = 0;
        $this->unAfficheur=new Afficheur();
    }

    public function setMesures($position, $precision) {
        //simule une évolution des données du récepteur GPS
        $this->position = $position;
        $this->precision = $precision;
        //informe automatiquement son afficheur du changement
        $this->unAfficheur->actualiser($this);
    }

    public function __toString() {
        return "position: " . $this->position . "  précision: " . $this->precision . "\n";
    }
}
class Afficheur {
    //est informée automatiquement d’une évolution GPS
    public function actualiser($gps){
        echo $gps;
    }
}
//main 
$gps = new Gps();
$gps->setMesures("Nord 48,51,57 Ouest 2,30,0", 3); //actualisation automatique de l'affichage
$gps->setMesures("Nord 48,52,0  Ouest 2,30,0", 3);
?>
