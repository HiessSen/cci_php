<?php
$test = 5;
function afficherTable($arg)
{
    $reponse = '';
    for ($i = 0; $i <= 10; $i++) {
        $reponse .= $i . ' x ' . $arg . ' = ' . $i*$arg . '<br>';
    }
    return $reponse;
}
echo afficherTable($test);