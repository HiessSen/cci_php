<?php
// Fonction pour connecter un utilisateur
function connecterUtilisateur($emailF='', $passwordF='')
{
    // Je verifie si email et password ont des valeurs
    if (!empty($emailF) && !empty($passwordF))
    {
        // J'ouvre un fichier membre.csv
        $fichier = fopen('membres.csv', 'a');
        $utilisateurExiste = false;
        // Je parcours chaque ligne du fichier CSV
        while (($ligne = fgetcsv($fichier, 1000, ';', '"', '\\')) !== FALSE)
        {
            // Vérifie si l'email existe déjà dans le fichier
            if (($ligne[0] == $emailF) && ($ligne[1] == $passwordF))
            {
                $utilisateurExiste = true;
            }
        }
    }
    // Si pas d'email ou de mot de passe, je retourne false.
    return false;
}