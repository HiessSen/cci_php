<?php
require_once 'db.php';
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
// Je prépare une requête SQL d'insertion
$requete = $dbh->prepare('
INSERT INTO utilisateurs
    (nom_utilisateur, prenom_utilisateur, email_utilisateur, motdepasse_utilisateur, actif_utilisateur, niveau_utilisateur)
VALUES
    (:nom, :prenom, :email, :password, :actif, :niveau)');
$requete->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$requete->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$requete->bindValue(':password', $hashed_password, PDO::PARAM_STR);
$requete->bindValue(':actif', $_POST['actif'], PDO::PARAM_STR);
$requete->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
if($requete->execute())
{
    echo 'Utilisateur enregistré';
}
else
{
    echo 'Erreur';
};