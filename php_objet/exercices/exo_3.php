<?php
trait Greet{
    public function sayHello(){
        echo 'Hello World ! ';
    }
}
class Individu{
    use Greet;
     private string $nom;
     public function __construct($nom) {
        $this->nom = $nom;
    }
    private function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule()
    {
        echo $this->getNom();
    }
}
class Robot{
    use Greet;
     private string $nom;
     public function __construct($nom) {
        $this->nom = $nom;
    }
    private function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule()
    {
        echo $this->getNom();
    }
}
class Animal{
    use Greet;
     private string $nom;
     public function __construct($nom) {
        $this->nom = $nom;
    }
    public function ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule()
    {
        echo $this->getNom();
    }
    private function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
}
$individu1 = new Individu('Nom de l\'individu : ');
$robot1 = new Robot('Nom du robot : ');
$animal1 = new Animal('Nom de l\'animal : ');
$individu1->ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule();
$individu1->sayHello();
$robot1->ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule();
$robot1->sayHello();
$animal1->ajouterNomAuTextePourDesRaisonsDeLisibiliteMaGueule();
$animal1->sayHello();