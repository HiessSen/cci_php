<?php
// Création d'un fichier CSV
$file = fopen("tableau.csv", "a");
//Création d'un tableau multidimensionnel qui va remplir les lignes de mon CSV
$clients = [
    ['Senouci', 'Ilan'],
    ['Ozier-Lafontaine', 'Élodie'],
    ['Costanzo', 'Imran'],
    ['Siri', 'Tanguy'],
    ['Carpentier', 'Stéphane']
];
// Je boucle sur mon tableau
foreach ($clients as $client)
{
    fputcsv($file, $client, ';', '"', '\\');
}