<?php
function afficherInformations($nomF, $ageF)
{
    $reponse = 'Bonjour ' . $nomF . '. Sachez que vous avez ' . $ageF . ' ans.';
    return $reponse;
}
function afficherErreur()
{
    $erreur = '';
    if(empty($_GET['nom']) && empty($_GET['age']))
    {
        $erreur .= 'Mais qui êtes vous ? Et quel âge avez vous ?';
    }

    else if(empty($_GET['nom']))
    {
        $erreur .= 'Nous avons besoin d\'un nom !!';
    }
    else if(empty($_GET['age']))
    {
        $erreur .= 'Mais quel âge avez vous ?';
    }
    return $erreur;
}
if(isset($_GET['nom']) && isset($_GET['age']))
{
    echo afficherInformations($_GET['nom'], $_GET['age']);
}
else
{
    echo afficherErreur();
}