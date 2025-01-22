<?php
session_start();
require('db.php');

echo $_COOKIE['nom'] . '<br>';
echo $_COOKIE['prenom'] . '<br>';
echo $_COOKIE['email'] . '<br>';
echo $_COOKIE['password'] . '<br>';

if(isset($_GET['token']) && !empty($_GET['token']))
{
    $token = $_GET['token'];
}
function verifierToken($cle)
{
    if($_SESSION['token'] === $cle)
    {
        return true;
    }
    else
    {
        return false;
    }
}
if(verifierToken($token) == false)
{
    header ("location: login.php");
    exit;
}

