<?php
require_once('trait_pdo.php');
class User {
    private $pseudo;
    private $mail;
    private $password;
    use database;
    public function login()
    {

    }
    public function register($pseudo, $mail, $password)
    {
        $sql = $this->connexionBdd();

    }
}