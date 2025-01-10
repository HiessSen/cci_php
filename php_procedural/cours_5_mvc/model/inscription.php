<?php
// Fonction pour créer un utilisateur
function creerUtilisateur($emailF='', $passwordF='')
{
    // Je verifie si email et password ont des valeurs
    if (!empty($emailF) && !empty($passwordF))
    {
        // J'ouvre un fichier membre.csv
        $fichier = fopen('membres.csv', 'a');
        fputcsv($fichier, [$emailF, $passwordF], ';', '"', '\\');
        fclose($fichier);
        // Je vais stocker dans un cookie les valeurs
        setcookie('membres', serialize(['email' => $emailF, 'password' => $passwordF]), (time() + 3600));
        // Je retourne true si les conditions sont réunies
        return true;
    }
    // Si pas d'email ou de mot de passe, je retourne false.
    return false;
}