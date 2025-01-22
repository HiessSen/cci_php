<?php
session_start();
require_once 'db.php';

if (isset($_POST["submit"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = strip_tags($_POST["email"]);
        $password = $_POST["password"];
        $sql = "SELECT * FROM utilisateurs WHERE email_utilisateur = :email";
        $req = $dbh->prepare($sql);
        $req->bindParam(':email', $email, PDO::PARAM_STR);

        if ($req->execute()) {
            $user = $req->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($password, $user['motdepasse_utilisateur'])){
                setcookie('email', $user['email_utilisateur'], time() + 3600);
                setcookie('nom', $user['nom_utilisateur'], time() + 3600);
                setcookie('prenom', $user['prenom_utilisateur'], time() + 3600);
                setcookie('password', $user['motdepasse_utilisateur'], time() + 3600);
                $token = genererToken();
                header('location: membre.php?token=' . $token);
            } else {
                echo 'Nom d\'utilisateur ou mot de passe incorrect.';
            }
        } else {
            echo 'Erreur lors de l\'exécution de la requête.';
        }
    } else {
        echo 'Veuillez remplir tous les champs.';
    }
}
function genererToken(){
    // Chaine de caractère pour le token
    $chaine = 'azertyuiopqsdfhjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789&é"(-è_çà)=';
    // Je transforme ma chaine en tableau
    $tableau = mb_str_split($chaine);
    // Je calcule la taille de la chaine de caractère avec count
    $longeur = count($tableau);
    // J'initialise une variable token vide
    $token = '';
    // On va générer une clé aléatoire avec une boucle for avec une longueur random entre 16 et 30
    for($i=0;$i<rand(16,30);$i++){
        // J'ajoute un caractère au token à chaque itération
        $token.= $tableau[rand(0,$longeur - 1)];
    }
    // Je hashe le token
    $token = md5(sha1($token));
    // J'enregistre mon token dans une session
    $_SESSION['token'] = $token;
    // Une fois mon token terminé je le retourne
    return $token;
}
?>