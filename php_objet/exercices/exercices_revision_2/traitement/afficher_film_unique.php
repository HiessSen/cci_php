<?php
require_once '../class.film_manager.php';

// Vérifie si un ID est passé en paramètre dans l'URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Crée une instance de FilmManager
    $filmManager = new FilmManager('', '', 0, '');

    // Appelle la méthode pour obtenir le film par ID
    $filmManager->getFilmById($id);
} else {
    echo 'Veuillez renseigner un id.';
}