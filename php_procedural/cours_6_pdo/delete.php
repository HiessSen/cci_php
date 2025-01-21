<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
// Je verifie si j'ai bien un ID en GET
if(isset($_GET['id']) && !empty($_GET['id']))
{
    // Je prépare ma requête SQL
    $del = $dbh->prepare('DELETE FROM utilisateurs WHERE id = :id');
    $del->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    // Si la requête se passe bie,
    if($del->execute())
    {
        echo 'Membre supprimé';
    }
    else
    {
        echo 'Apprends à coder';
    }
}