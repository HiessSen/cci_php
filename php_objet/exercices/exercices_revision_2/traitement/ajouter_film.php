<?php
require_once 'class.film_manager.php';
if(isset($_POST['submit'])){
    $titre = $_POST['titre'];
    $dateSortie = $_POST['date_sortie'];
    $duree = $_POST['duree'];
    $genre = $_POST['genre'];
    // Convertit le format de la date
    $dateSortie = str_replace('/', '-', $dateSortie);
}
// Crée une instance de FilmManager
$filmManager = new FilmManager('', '', 0, '');

// Appelle la méthode pour ajouter un film
$filmManager->ajouterFilm($titre, $dateSortie, $duree, $genre);