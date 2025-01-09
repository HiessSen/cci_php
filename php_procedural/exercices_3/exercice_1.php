<?php
$tableau = [
    [
        'Personne 1' => ['Nom' => 'Bru', 'Prénom' => 'Thierry','Age' => 39],
        'Personne 2' => ['Nom' => 'Dupont', 'Prénom' => 'Juliette','Age' => 35],
        'Personne 3' => ['Nom' => 'Chirac','Prénom' => 'Patrick', 'Age' => 45]
    ]
];
$test = array_filter($tableau[0],function($personne){
    return $personne['Age'] < 40;
});
foreach ($test as $key => $value){
    // Je parcours le tableau dans le tableau
    echo $key." :<br>";
    foreach ($value as $key2 => $value2){
        echo $key2. ' : '. $value2.'<br>';
    }
        echo "<br>";
}