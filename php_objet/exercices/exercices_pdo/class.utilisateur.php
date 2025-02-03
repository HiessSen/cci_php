<?php
require_once('trait_pdo.php');
class Utilisateur
{
    // Je definis mes attributs
    private string $pseudo;
    private string $mail;
    private string $password;
    // Utilisation du trait
    use database;
    // Déclaration d'un constructeur qui permet de verifier si l'utilisateur est connecté
    public function __construct(string $mail, string $password)  {
        $sql = $this->connexionBDD();
        $requete = $sql->prepare('SELECT * FROM utilisateur WHERE mail = :mail');
        $requete->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
        if ($requete->execute()) {
            // Je verifie que j'ai un résultat
            if ($requete->rowCount() > 0)
            {
                // Je transforme ma ligne en tableau associatif
                $result = $requete->fetch(PDO::FETCH_ASSOC);
                // Je vérifie que le mot de passe est valide
                if(password_verify($password, $result['password']))
                {
                    // Je crée mon objet
                    $this->pseudo = $result['pseudo'];
                    $this->mail = $result['mail'];
                    $this->password = $result['password'];
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        return true;
    }
    public function getPseudo(): string {
        return $this->pseudo;
    }
    public static function register($pseudo, $mail, $password)
    {
        // J'utilise la méthode connexionBdd en utilisant 'self'
        $sql = self::connexionBdd();
    }
}
if(isset($_POST['submit']))
{
    if(!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['password']))
    {
        $utilisateur = new Utilisateur($_POST['mail'], $_POST['password']);
        if($utilisateur)
        {
            echo $utilisateur->getPseudo();
        }
    }
}
