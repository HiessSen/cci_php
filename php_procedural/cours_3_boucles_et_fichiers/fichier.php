<?php
//Je crée un fichier avec la fonction fopen()
$fichier = fopen("fichier.txt", "a");
//J'écris dans ce fichier avec la fonction fwrite()
fwrite($fichier, 'Ce texte a été écrit en PHP via la fonction fwrite()');
// Je ferle ensuite le fichier par soucis de performance
$fichier2 = file_get_contents("fichier2.txt");
echo $fichier2;

$fichier3 = file_get_contents("http://www.cher.cci.fr");
//echo $fichier3;
fwrite($fichier,$fichier3);
fclose($fichier);
$lire = file_get_contents("fichier.txt");
echo $lire;
//pour créer un dossier, j'utilise "Mkdir"
mkdir("dossier");