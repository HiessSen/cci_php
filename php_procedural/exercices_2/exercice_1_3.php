<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercices PHP série 2</title>
</head>
<body>
<?php
echo '<h1>Exercice 1</h1>';
$tableauExo1 = [
    'Titre' => '1984',
    'Auteur' => 'Georges Orwell',
    'Année de publication' => 1949,
    'Genre' => 'Dystopie'
];
echo $tableauExo1['Titre'] . ', ' . $tableauExo1['Auteur'] . ', ' . $tableauExo1['Année de publication'] . ', ' . $tableauExo1['Genre'];
echo '<h1>Exercice 2</h1>';
$tableauExo2 = ['Pomme', 'Fraise' ,'Banane'];
$tableauExo2[2] = 'Orange';
var_dump($tableauExo2);
echo '<h1>Exercice 3</h1>';
$tableauExo3 = [
    'employé1' => [
        'Nom' => 'Ilan',
        'Age' => '32',
        'Poste' => 'Dev Ops',
    ],
    'employé2' => [
        'Nom' => 'Élodie',
        'Age' => '34',
        'Poste' => 'Fronteuse',
    ]
];
echo $tableauExo3['employé1']['Nom'] . ', agé de ' . $tableauExo3['employé1']['Age'] . ' ans, est ' . $tableauExo3['employé1']['Poste'];
echo '<br>';
echo $tableauExo3['employé2']['Nom'] . ', agée de ' . $tableauExo3['employé2']['Age'] . ' ans, est ' . $tableauExo3['employé2']['Poste'];
?>
</body>
</html>