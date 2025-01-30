<?php
trait PDzO{
    public function connexionBDD()
    {
        $dsn = 'mysql:dbname=exopdophp;host=localhost;';
        $dbh = new PDO($dsn,'root','');
        return $dbh;
    }
}
class UtilisateurTest{
    use PDzO;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    public function register()
    {
        $sql = $this->connexionBDD();
        $sql->prepare('INSERT INTO utilisateurs(nom_utilisateur, prenom_utilisateur, email_utilisateur, motdepasse_utilisateur) VALUES(:nom, :prenom, :email, :motdepasse)');
        if($sql->execute())
        {
            return true;
        }
        return false;
    }
}