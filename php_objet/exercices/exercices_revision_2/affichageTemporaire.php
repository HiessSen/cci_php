<?php
require_once 'class.acteur.php';
require_once 'class.film_manager.php';
$acteur1 = new Acteur(1, 'Herman', 'Logan', '22 mai 1886');
$acteur2 = new Acteur(2, 'Willis', 'Bruce', '08 nov 1515');
$acteur3 = new Acteur(3, 'OL', 'Élodie', '14 fev 2025');
$film1 = new Film('La passion du Christ', '26 novembre 1992', 150, 'Historique, glorieux et magnifique');
$film2 = new Film('Avengers Endgame', '13 Aout 2017', 124, 'C\'est la bagarre !!!');
$film3 = new Film('Titanic', '21 juin 1998', 187, 'Film de bateau');
$film1->ajouterActeur($acteur1);
$film2->ajouterActeur($acteur1);
$film2->ajouterActeur($acteur2);
echo $film1->afficherDetails();
echo $film2->afficherDetails();
echo $film3->afficherDetails();
echo '_____________________________________';
echo $acteur1->afficherDetails();
echo $acteur2->afficherDetails();
echo $acteur3->afficherDetails();