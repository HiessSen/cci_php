<?php
class Database {
    private static $_instance = null;
    private $pdo;
    private function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=cinema_db', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            die('Erreur lors de la connexion: '.$e->getMessage());
        }
    }
    public static function getInstance()
    {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function getConnexion()
    {
        return $this->pdo;
    }
    private function __clone(){} // Cette methode privée et vide empêche le clonage
    public function __wakeup(){} // Cette methode privée et vide empêche la deserialisation
}