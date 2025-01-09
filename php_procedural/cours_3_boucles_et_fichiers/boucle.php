<?php
$tableau = ['Ilan', 'Élodie', 'Tanguy', 'Stéphane', 'Etc'];
//Les boucles en PHP
echo '<u><b>Les boucles en PHP : </b></u>';
for ($i = 0; $i < 5; $i++)
{
    echo '<u><b>' . $i . ' </b></u>';
}
echo "<br><br>";
//Les boucles for en PHP
echo 'Les boucles for en PHP :<br>';
//$i parcourt les éléments du tableau. La fonction 'count()' sert à compter le nombre d'éléments
for ($i = 0; $i < count($tableau); $i++)
{
    echo $tableau[$i] . ' ';
}
echo '<hr>';
//Les boucles while en PHP
echo 'Les boucles while en PHP :<br>';
$i = 0;
while ($i < count($tableau))
{
    echo $tableau[$i]. ' ';
    $i++;
}
echo '<hr>';
//Les boucles do while en PHP
echo 'Les boucles do while en PHP :<br>';
$i = 0;
do
{
    echo $tableau[$i]. ' ';
    $i++;
}while ($i < count($tableau));
echo '<hr>';
//Les boucles for each en PHP
echo 'Les boucles for each en PHP :<br>';
foreach ($tableau as $prenom)
{
    echo $prenom. ' ';
}
echo '<hr>';
$tableauAssociatif = [
    'Le boss' => 'Ilan',
    'La plus belle' => 'Élodie',
    'Le plus chauve' => 'Stéphane',
    'Le plus gentil' => 'Tanguy'
];
//Les boucles for each en PHP (avec clés et valeurs)
echo 'Les boucles for each en PHP (avec clés et valeurs) :<br>';
foreach ($tableauAssociatif as $status => $prenom)
{
    echo $status. ' '. $prenom. '<br>';
}
echo '<hr>';
$tableauImbrique = [
    'personne1' => [
        'Nom' => 'Senouci',
        'Prenom' => 'Ilan',
        'Age' => 32,
        'Rôle' => 'développeur full-stack'
    ],
    'personne2' => [
        'Nom' => 'Ozier-Lafontaine',
        'Prenom' => 'Élodie',
        'Age' => 34,
        'Rôle' => 'développeur front-end'
    ],
    'personne3' => [
        'Nom' => 'Siri',
        'Prenom' => 'Tanguy',
        'Age' => 30,
        'Rôle' => 'développeur back-end'
    ],
    'personne4' => [
        'Nom' => 'Carpentier',
        'Prenom' => 'Phane-Sté',
        'Age' => 52,
        'Rôle' => 'Standardiste '
    ]
];
//Les boucles imbriqués en PHP
echo '<u><b>Les boucles imbriqués en PHP :</b></u><br><br>';
//Je parcours le premier tableau
foreach ($tableauImbrique as $key => $value){
    // Je parcours le tableau dans le tableau
    foreach ($value as $key2 => $value2){
        echo $key2. ' : '. $value2. '<br>';
    }
    echo '<br>';
}