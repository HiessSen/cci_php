<?php
// Je verifie que le formulaire a bien été soumis
if(isset($_POST["submit"]))
{
    // On vérifie si les champs ont bien une valeur
    if(!empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["password2"]))
    {
        // Je vérifie si les 2 password sont identique
        if($_POST["password"] == $_POST["password2"])
        {
            // Je hashe le mot de passe
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            // Je fais appel au model pour créer l'utilisateur
            if(creerUtilisateur($_POST["email"], $password))
            {
                // Je redirige l'utilisateur vers la page connection
                header('Location: index.php?route=connection');
                // Je quitte ce script
                exit();
            }
            else
            {
                // Si le modèle n'a pas pu créer l'utilisateur
                $message = "L'email ou le mot de passe est incorrect";
            }
        }
        else
        {
            // Si les mots de passe ne correspondent pas
            $message = "Les mots de passe ne correspondent pas";
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