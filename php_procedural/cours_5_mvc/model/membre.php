<?php
// Je crée une fonction qui verifie le token
function verifierToken($cle)
{
    if ($_GET['token'] === $cle) {
        return true;
    }else{
        return false;
    }
}