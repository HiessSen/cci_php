<?php
trait BaseDeDonnees
{
    public function connexionBDD(): PDO
    {
        $dsn = 'mysql:dbname=exos_classes_voiture;host=localhost;';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }
}