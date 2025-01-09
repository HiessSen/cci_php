<?php
$tableau1 = [
    ['Stéphane', 'Carpentier'],
    ['Imane', 'Amri'],
    ['Tristan', 'Deschamp']
];
var_dump($tableau1);
echo $tableau1[1][0].' '.$tableau1[1][1];
$tableau2 = [
    'jeu 1' => [
        'Titre' => 'Sekiro : Shadows Die Twice',
        'Dev' => 'From Software',
        'Editeur' => 'Activision'
    ],
    'jeu 2' => [
        'Titre' => 'Spider-Man : Miles Morales',
        'Dev' => 'Insomniac Games',
        'Editeur' => 'Sony'
    ],
    'jeu 3' => [
        'Titre' => 'The Witcher 3 : Wild Hunt',
        'Dev' => 'Cd Project Red',
        'Editeur' => 'Cd Project Red'
    ]
];
var_dump($tableau2);
echo $tableau2['jeu 1']['Dev'] . ' ' . $tableau2['jeu 3']['Titre'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cours multi tableau PHP</title>
</head>
<body>

</body>
</html>
