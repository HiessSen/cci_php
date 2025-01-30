<?php
trait Database
{
    public function connexionBDD(): PDO
    {
        $dsn = 'mysql:dbname=bdd_poo;host=localhost;';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    }
}