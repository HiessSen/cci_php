// Ilan SENOUCI
// Création de personnes et d'employés. (Les employés extends Personne)
// Permet de gerer des augmentations de 10% pour les employés, et de gerer le sexe des personnes.
<?php
// Création de la classe Personne (nom, prenom, sexe, age)
class Personne {
    // Création des attributs des personnes
    private string $sexe;
    private string $nom;
    private string $prenom;
    private int $age;
    // Constructeur de la classe avec tous ses attributs (qui sont obligatoires)
    public function __construct($sexe, $nom, $prenom, $age) {
        $this->sexe = $sexe;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    // Création des getters (sexe, nom, prenom, age)
    public function getSexe()
    {
        return $this->sexe;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }
    // Création des setters (sexe, nom, prenom, age)
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    // Méthode qui affiche le sexe de la personne.
    public function gererSexe()
    {
        if ($this->getSexe() == "M") {
            return ', je suis un homme';
        }
        return ', je suis une femme';
    }
    // Méthode qui sert à afficher les caracteristiques de la personne 'nom, sexe, prénom, age)
    public function presentation()
    {
        echo 'Je m\'appelle ' . $this->getNom() . ' ' . $this->getPrenom() . $this->gererSexe() . ' et j\'ai ' . $this->getAge() . ' ans.<br>';
    }
}
$femme1 = new Personne('F', 'OL', 'Élodie', 36);
$homme1 = new Personne('M', 'SENOUCI', 'Ilan', 32);
$femme1->presentation();
$homme1->presentation();

class Employe extends Personne {
    private string $entreprise;
    private string $poste;
    private float $salaire;
    public function __construct($sexe, $nom, $prenom, $age, $entreprise, $poste, $salaire)
    {
        parent::__construct($sexe, $nom, $prenom, $age);
        $this->entreprise = $entreprise;
        $this->poste = $poste;
        $this->salaire = $salaire;
    }
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    public function getPoste()
    {
        return $this->poste;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function augmenterSalaire()
    {
        $this->salaire *= 1.1;
    }
    public function presentation()
    {
        echo 'Je m\'appelle ' . $this->getNom() . ' ' . $this->getPrenom() . $this->gererSexe() . ' et j\'ai ' . $this->getAge() . ' ans. Je travaille à ' . $this->getEntreprise() . ' en tant que ' . $this->getPoste() . '. Je touche ' . $this->getSalaire() . ' €.<br>';
    }
}
$employe1 = new Employe('F', 'OL', 'Élodie', 36, 'Cnam de Vierzon', 'stagiaire', 5466);
$employe2 = new Employe('M', 'SENOUCI', 'Ilan', 33, 'CCI de Bourges', 'stagiaire', 5975);
$employe1->presentation();
$employe1->augmenterSalaire();
$employe1->presentation();
$employe2->presentation();
$employe2->augmenterSalaire();
$employe2->presentation();