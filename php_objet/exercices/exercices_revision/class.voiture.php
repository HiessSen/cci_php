<?php
require_once('database.php');
class Voiture{
    use BDDMaLegueue;
    private string $marque;
    private string $modele;
    private int $annee;
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    private function getMarque()
    {
        return $this->marque;
    }
    private function getModele()
    {
        return $this->modele;
    }
    private function getAnnee()
    {
        return $this->annee;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
    public function afficherDetails()
    {
        if($this->annee <= date("Y"))
        {
            echo 'La ' . $this->getMarque() . ' ' . $this->getModele() . ' est sortie en ' . $this->getAnnee() . '. ' . PHP_EOL;
        }
        else
        {
            echo 'Il est strictement impossible que votre voiture soit sortie en ' . $this->getAnnee() . '. Car nous sommes en ' . date("Y") . '.' . PHP_EOL;
        }
    }
}
//$toyota1 = new Voiture('Voiture', 'Voiture', 0);
//$toyota1->setMarque('Toyota');
//$toyota1->setModele('Corola');
//$toyota1->setAnnee(1998);
//$toyota1->afficherDetails();
//echo '<br>';