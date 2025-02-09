<?php
if(isset($resultat))
{
    $content = '<h2>Titre : ' . $resultat['titre'] . '</h2>';
    $content .= '<p>Genre : ' . $resultat['genre'] . '</p>';
    $content .= '<p>Sorti le : ' . $resultat['date_sortie'] . '</p>';
    $content .= '<p>Durée : ' . $resultat['duree'] . '</p>';
}
else
{
   $content = '<h2>Aucun résultat trouvé. Veuillez réessayer</h2>';
}
echo $content;