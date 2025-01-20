<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
// J'écris ma requète SQL
$sql = 'SELECT * FROM utilisateur';
// Je vais boucler sur les lignes retournées par la requète
foreach ($dbh->query($sql) as $ligne) {
    echo $ligne['nom'] . ' ' . $ligne['prenom'] . '<br>';
}