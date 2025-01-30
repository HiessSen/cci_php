<?php
require_once('function.php');
$password1 = genererMotDePasse();
echo 'Mot de passe généré aléatoirement : ' . $password1 . '<br>';
$password2 = genererMotDePasse([
    'longueur' => 40,
    'speciaux' => 8,
    'majuscules' => 8,
    'chiffres' => 5,
    'FlorianEtTristan' => 'accro au porn'
]);
echo $password2;