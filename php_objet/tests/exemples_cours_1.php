<?php
trait VehiculeRoulant {
    private int $vitesse;
    private int $vitesseMax;
    public function accelerer(int $increment): void {
        $this->vitesse += $increment;
        if ($this->vitesse > $this->vitesseMax) {
            $this->vitesse = $this->vitesseMax;
        }
        echo 'La ' . htmlspecialchars($this->marque) . ' ' . htmlspecialchars($this->gamme) . ' ' . htmlspecialchars($this->couleur) . ' accélère à ' . $this->vitesse . ' km/h.<br>';
    }
    public function freiner(int $decrement): void {
        $this->vitesse -= $decrement;
        if ($this->vitesse < 0) {
            $this->vitesse = 0;
        }
        echo 'La ' . htmlspecialchars($this->marque) . ' ' . htmlspecialchars($this->gamme) . ' ' . htmlspecialchars($this->couleur) . ' freine à ' . $this->vitesse . ' km/h.<br>';
    }
    public function arreter(): void {
        $this->vitesse = 0;
        echo 'La ' . htmlspecialchars($this->marque) . ' ' . htmlspecialchars($this->gamme) . ' ' . htmlspecialchars($this->couleur) . ' est arrêtée.<br>';
    }
}
class Voiture {
    use VehiculeRoulant;
    private string $marque;
    private string $gamme;
    private string $type;
    private string $couleur;
    private int $nombrePortes;
    private int $nombrePlaces;
    public function __construct(string $marque, string $gamme, string $type, string $couleur, int $vitesseMax, int $nombrePortes, int $nombrePlaces) {
        $this->marque = $marque;
        $this->gamme = $gamme;
        $this->type = $type;
        $this->couleur = $couleur;
        $this->vitesse = 0; // Initialement à l'arrêt
        $this->vitesseMax = $vitesseMax;
        $this->nombrePortes = $nombrePortes;
        $this->nombrePlaces = $nombrePlaces;
    }
    // Getters
    public function getMarque(): string {
        return $this->marque;
    }
    public function getGamme(): string {
        return $this->gamme;
    }
    public function getType(): string {
        return $this->type;
    }
    public function getCouleur(): string {
        return $this->couleur;
    }
    public function getVitesse(): int {
        return $this->vitesse;
    }
    public function getVitesseMax(): int {
        return $this->vitesseMax;
    }
    public function getNombrePortes(): int {
        return $this->nombrePortes;
    }
    public function getNombrePlaces(): int {
        return $this->nombrePlaces;
    }
}
// Instanciation de deux voitures
$voiture1 = new Voiture("Toyota", "Corola", "SUV", "Rouge", 180, 5, 5);
$voiture2 = new Voiture("Renault", "Clio", "Berline", "Bleu", 200, 4, 5);
// Utilisation des méthodes
$voiture1->accelerer(50);
$voiture1->freiner(20);
$voiture1->arreter();
$voiture2->accelerer(100);
$voiture2->freiner(50);
$voiture2->arreter();
?>