<?php
session_start();
// Je verifie que le formulaire a bien été soumis
if(isset($_POST["submit"]))
{
    // On vérifie si les champs ont bien une valeur
    if(!empty($_POST["email"]) && !empty($_POST["password"]))
    {
        // Je fais appel au model pour connecter l'utilisateur
        if(connecterUtilisateur($_POST["email"], $_POST["password"]))
        {
            $token = genererToken();
            // Je redirige l'utilisateur vers la page connection
            header('Location: index.php?route=membre&token=.$token');
            // Je quitte ce script
            exit();
        }
        else
        {
            // Si le modèle n'a pas pu connecter l'utilisateur
            $message = "L'email ou le mot de passe est incorrect";
        }
    }
    else
    {
        // Si tous les champs n'ont pas été remplis
        $message = "Veuillez remplir tous les champs";
    }
}
else
{
    $message = '';
}

//$password = password_hash($_POST["password"], PASSWORD_DEFAULT);