<?php
foreach ($resultat as $film) {
    $content = '<h2>Titre : ' . $film['titre'] . '</h2>';
    $content .= '<p>Genre : ' . $film['genre'] . '</p>';
    $content .= '<p>Sorti le : ' . $film['date_sortie'] . '</p>';
    $content .= '<p>Durée : ' . $film['duree'] . ' minutes</p>';
    $content .= '<a href="afficher_film_unique.php?id='.$film['id'].'">Afficher film</a>';
    $content .= '<br>';
    $content .= '<a href="modifier_film.php?id='.$film['id'].'">Modifier film</a>';
    $content .= '<br>';
    $content .= '<a href="supprimer_film.php?id='.$film['id'].'">Supprimer film</a>';
    echo $content;
}
