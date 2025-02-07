<?php
class Acteur {
    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    public function __construct(int $id, string $nom, string $prenom, string $dateNaissance)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    private function setId(int $id): void
    {
        $this->id = $id;
    }
    private function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    private function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    private function setDateNaissance(string $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function afficherDetails()
    {
        $detailsActeur = '';
        $detailsActeur .= '<p>' . $this->getId() . '</p>';
        $detailsActeur .= '<p>' . $this->getNom() . '</p>';
        $detailsActeur .= '<p>' . $this->getPrenom() . '</p>';
        $detailsActeur .= '<p>' . $this->getDateNaissance() . '</p>';
        return $detailsActeur;
    }
}