<?php
$tableau1 = [
    'param' => [
        'Animaux'
    ],
    'valeur' => [
        'Chat','Chien','Oiseau','Chacal'
    ]
];
$tableau2 = [
    'param' => [
        'Véhicules'
    ],
    'valeur' => [
        'Avion','Voiture','Bateau','Trotinette'
    ]
];
$tableau3 = [
    'param' => [
        'Aliments'
    ],
    'valeur' => [
        'Salade','Choucroute','Couscous','Pot-au-feu'
    ]
]
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
</head>
<body>
<form action="" method="post">
    <input type="radio" name="check" value="1" checked />
    <label >Liste 1 :</label>
    <input type="radio" name="check" value="2" />
    <label >Liste 2 :</label>
    <input type="radio" name="check" value="3" />
    <label >Liste 3 :</label>
    <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_POST['check']))
{
    if ($_POST['check'] == '1') {
        $tableau = $tableau1;
    }
    else if ($_POST['check'] == '2')
    {
        $tableau = $tableau2;
    }
    else
    {
        $tableau = $tableau3;
    }
}
function genererListe($paramF=array(), $valeurF=array()){
    foreach ($paramF as $para) {
        echo '<label for="' . $para . '">Choisissez parmi ces ' . $para . ' :</label><br>';
        echo '<select name="' . $para . '">';
        echo '<option value="' . $para . '"> ' . $para . ' </option>';
    }
    foreach ($valeurF as $val) {
        echo '<option value="' . $val . '"> ' . $val . ' </option>';
    }
}
?>
<?php
    genererListe($tableau['param'], $tableau['valeur']);
?>
</body>
</html>