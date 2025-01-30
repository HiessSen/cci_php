<?php
class Livre {
    private string $titre;
    private string $auteur;
    private int $anneePublication;
    private bool $disponibilite;
    public function __construct($titre, $auteur, $anneePublication, $disponibilite) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->anneePublication = $anneePublication;
        $this->disponibilite = $disponibilite;
    }
    private function getTitre()
    {
        return $this->titre;
    }
    private function getAuteur()
    {
        return $this->auteur;
    }
    private function getAnneePublication()
    {
        return $this->anneePublication;
    }
    private function getDisponibilite()
    {
        return $this->disponibilite;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function setAnneePublication($anneePublication)
    {
        $this->anneePublication = $anneePublication;
    }
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;
    }
    public function afficherDisponibilite()
    {
        if($this->disponibilite == true)
        {
            return ' est disponible';
        }
        else
        {
            return ' n\'est pas disponible';
        }
    }
    public function afficherInformations()
    {
        echo 'Le livre "' . $this->getTitre() . '", écrit par ' . $this->getAuteur() .' et publié en ' . $this->getAnneePublication() . $this->afficherDisponibilite() . '.<br>';
    }
}
$livre1 = new Livre('Extension du domaine de la lutte', 'Michel Houellebecq', 1995, 1);
$livre2 = new Livre('Harry Potter à l\'école des sorciers', 'J. K. Rowling', 1998, 0);
$livre3 = new Livre('Le suicide Français', 'Eric Zemmour', 2023, 1);
$livre4 = new Livre('Insatiables : 30 histoires érotiques', 'Claude Avez', 2018, 0);
$livre1->afficherInformations();
$livre2->afficherInformations();
$livre3->afficherInformations();
$livre4->afficherInformations();
class Membre {
    private string $nom;
    private int $noMembre;
    private array $livresEmpruntes;
    public function __construct(string $nom, int $noMembre)
    {
        $this->nom = $nom;
        $this->noMembre = $noMembre;
    }
    private function getNom()
    {
        return $this->nom;
    }
    private function getNoMembre()
    {
        return $this->noMembre;
    }
    private function getLivresEmpruntes()
    {
        return $this->livresEmpruntes;
    }
}