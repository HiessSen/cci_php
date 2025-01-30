<?php
require_once('trait_pdo.php');
class Utilisateur
{
    use Database;
    private string $pseudo;
    private string $mail;
    private string $password;
    public function __construct(string $pseudo, string $mail, string $password)  {
        $this->pseudo = $pseudo;
        $this->mail = $mail;
        $this->password = $password;
    }
    // Méthode statique pour l'appeller en dehors d'un objet
     public static function register()
    {
        $sql = $this->connexionBDD();
        if ($sql === null) {
            return false;
        }
        $requete = $sql->prepare('INSERT INTO user(pseudo, mail, password) VALUES(:pseudo, :mail, :password)');
        if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
            $requete->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
            $requete->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
            $requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
        }
        if ($requete->execute()) {
            echo 'nnnnnn';
            header('Location:inscription.php');
        } else {
            echo 'NIQUE TOI BIEN VILAIN';
        }
    }
}
Utilisateur::register();