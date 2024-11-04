<?php

interface Observateur {

    public function actualiser($o);
}

interface Observable {

    public function ajouterObservateur($o);

    public function supprimerObservateur($o);

    public function notifierObservateurs();
}

class Gps implements Observable {

    private $position;
    private $precision;
    private $lesObservateurs;

    public function __construct() {
        $this->position = 'inconnue';
        $this->precision = 0;
        $this->lesObservateurs = array();
    }

    public function ajouterObservateur($o) {
        $this->lesObservateurs[] = $o;        //tableau d'objets
    }

    public function supprimerObservateur($o) {
        //rechercher $o dans le tableau et le remplacer par null
    }

    public function notifierObservateurs() {
        foreach ($this->lesObservateurs as $unObservateur) {
            $unObservateur->actualiser($this);//chq observateur "tire" l'info
        }
    }

    public function getPosition() {
        return $this->position;
    }

    public function getPrecision() {
        return $this->precision;
    }

    public function setMesures($position, $precision) {
        $this->position = $position;
        $this->precision = $precision;
        $this->notifierObservateurs();//l'automatisme
    }

}

class EcranResume implements Observateur{
    
public function actualiser($o) {
        //appelée automatiquement lorsd'un chgt d'etat de l'observable Gps
    echo "resume : ".$o->getPosition()."\n";
    }
}

class EcranComplet implements Observateur{
    
public function actualiser($o) {
        //appelée automatiquement lorsd'un chgt d'etat de l'observable Gps
    echo "complet ".$o->getPosition()." precision: .".$o->getPrecision()."\n";
    }
}
?>
