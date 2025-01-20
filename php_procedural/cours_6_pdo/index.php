<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
var_dump($dbh);

// Je prépare une requête SQL d'insertion
$requete = $dbh->prepare('INSERT INTO utilisateur(nom, prenom, email, password, date_de_naissance) VALUES (:nom, :prenom, :email, :password, :date_de_naissance)');
$requete->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$requete->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$requete->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$requete->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
$requete->bindValue(':date_de_naissance', $_POST['date'], PDO::PARAM_STR);
if($requete->execute())
{
    echo 'Utilisateur enregistré';
}
else
{
    echo 'Erreur';
};
