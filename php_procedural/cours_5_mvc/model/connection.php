<?php
// Fonction pour connecter un utilisateur
function connecterUtilisateur($emailF, $passwordF)
{
    // J'ouvre le fichier dans une variable fichier
    $ficher = fopen($emailF, '.csv', 'r');
    // Si le fichier est ouvert
    if ($ficher !== FALSE) {
        // Tant que le fichier est ouvert, je récupère le contenu et le
        while(($data = fgetcsv($ficher, 1000, ',')) !== FALSE) {
            // Je verifie que les données sont les bonnes
            if ($data[0] === $emailF && password_verify($passwordF, $data[1])) {
                // Je ferme le fichier
                fclose($ficher);
                return true;
            }
        }fclose($ficher);
    }
    return false;
}
//Je crée une fonction qui génère un Token (token = jeton)
function genererToken()
{
    // Je crée une chaine de caractère pour le token
    $chaine = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789&é"(-è_çà/*-+=*!§:/;.,?<>¤€`]°+}@^\|[{#~';
    // Je transforme la chaine en tableau pour des raisons d'encodage;
    $tableau = mb_str_split($chaine);
    // Je calcule la longueur de la chaine de caractère avec strlen()
    $longueur = count($tableau);
    // J'initialise une variable Token vide
    $token = '';
    // Je génère une clé aléatoire avec une boucle for avec une longueur comprise entre 16 et 30
    for ($i = 0; $i < rand(16, 30); $i++) {
        $token .= $tableau[rand(0, $longueur - 1)];
    }
    // Je hashe le token
    $token = md5(sha1($token));
    // J'enregistre mon token dans une session
    $_SESSION['token'] = $token;
    // Une fois le token terminé, je le retourne
    return $token;
}
