<?php
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
// Je crée une fonction qui verifie le token
function verifierToken($cle)
{
    if ($_SESSION['token'] === $cle) {
        return true;
    }else{
        return false;
    }
}
// Je déclare une fonction avec en argument un tableau de paramètres vide
function genererMotDePasse($param=array())
{
    // Je crée un tableau avec des valeurs par défaut
    $default = [
        'longueur' => 16,
        'speciaux' => 3,
        'majuscules' => 3,
        'chiffres' => 4
    ];
    // Je fusionne les 2 tableaux
    $param = array_merge($default, $param);
    // Je crée mes 4 chaines de caractère
    $chaine = 'azertyuiopqsdfghjklmwxcvbn';
    $majuscules = 'AZERTYUIOPQSDFGHJKLMWXCVBN';
    $chiffres = '0123456789';
    $speciaux = '&é"(-è_çà)=°~#{[|`\^@]}/*-+?,;.:§!%ù¨^';
    // Je transforme les chaines de caractère en tableau
    $chaine = mb_str_split($chaine);
    $majuscules = mb_str_split($majuscules);
    $chiffres = mb_str_split($chiffres);
    $speciaux = mb_str_split($speciaux);
    // J'initialise un tableau vide pour le mot de passe
    $password = [];
    // J'enregistre le nombre de caractères présents dans le mot de passe
    $nbCarac = (int) $param['speciaux'] + $param['maj'] + $param['chiffres'];
    // Je vérifie si $nbCarac est bien inferieur ou égal à la longueur
    if ($nbCarac <= $param['longueur'])
    {
        // Je fais une boucle pour sélectionner les caractères
        for ($i = 0; $i < $param; $i++)
        {
            // Je vais ajouter au tableau un caractère spécial au hasard
            $password[] = $speciaux[rand(0,(count($speciaux) - 1))];
        }
        for ($i = 0; $i < $param; $i++)
        {
            // Je vais ajouter au tableau une majuscule au hasard
            $password[] = $majuscules[rand(0,count($majuscules) - 1)];
        }
        for ($i = 0; $i < $param; $i++)
        {
            // Je vais ajouter au tableau un chiffre au hasard
            $password[] = $chiffres[rand(0,count($chiffres) - 1)];
        }
    }
}