<?php
require_once "class.voiture.php";
class voitureElectrique extends voiture{
    private int $autonomie;
    public function __construct($marque, $modele, $annee, $autonomie)
    {
        parent::__construct($marque, $modele, $annee);
        $this->autonomie = $autonomie;
    }
    private function getAutonomie()
    {
        return $this->autonomie;
    }
    public function setAutonomie($autonomie)
    {
        $this->autonomie = $autonomie;
    }
    public function afficherDetails()
    {
        parent::afficherDetails();
        echo 'Son autonomie est de ' . $this->getAutonomie() . ' km.';
    }
}