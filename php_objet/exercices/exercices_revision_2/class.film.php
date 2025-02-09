<?php
require_once'class.database.php';
class Film {
    private string $titre;
    private string $dateSortie;
    private int $duree;
    private string $genre;
    private array $acteurs = [];
    public function __construct(string $titre, string $dateSortie, int $duree, string $genre)
    {
        $this->titre = $titre;
        $this->dateSortie = $dateSortie;
        $this->duree = $duree;
        $this->genre = $genre;
    }
    public function getTitre() : string
    {
        return $this->titre;
    }
    public function getDateSortie() : string
    {
        return $this->dateSortie;
    }
    public function getDuree() : int
    {
        return $this->duree;
    }
    public function getGenre() : string
    {
        return $this->genre;
    }
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }
    public function setDateSortie(string $dateSortie): void
    {
        $this->dateSortie = $dateSortie;
    }
    public function setDuree(string $duree): void
    {
        $this->duree = $duree;
    }
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }
    public function ajouterActeur(Acteur $acteur): void
    {
        $this->acteurs[] = $acteur;
    }
    public function afficherDetails(): string
    {
        $detailsFilm = '<h2>'.$this->getTitre().'</h2>';
        $detailsFilm .= '<p>Genre : '.$this->getGenre().'</p>';
        $detailsFilm .= '<p>Date de sortie : '.$this->getDateSortie().'</p>';
        $detailsFilm .= '<p>Duree : '.$this->getDuree().'</p>';
        if(!empty($this->acteurs))
        {
            foreach ($this->acteurs as $acteur) {
                $detailsFilm .= '<p>' . $acteur->getPrenom() . ' ' . $acteur->getNom() . '</p>';
            }
        }
        else
        {
            $detailsFilm .= '<p>Aucun acteur connu</p>';
        }
        return $detailsFilm;
    }
}