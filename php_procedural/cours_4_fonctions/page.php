<?php
// Je démarre la session
session_start();
// Je charge le fichier function.php
require_once('function.php');
// Je verifie le token
if (verifierToken($_GET['token']))
{
    echo 'Bienvenue';
}
else
{
    echo 'Dégage';
}