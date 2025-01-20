<?php
session_start();
// Fonction pour sauvegarder le nom d'utilisateur dans la session
function sauvegardeUtilisateur($nom)
{
    $_SESSION['name']= $nom;
}
// Vérification si le formulaire est soumis et que le champ 'name' est rempli
if(isset($_GET["submit"]))
{
    if(!empty($_GET["name"]))
    {
        sauvegardeUtilisateur($_GET["name"]);
    }
    else
    {
        echo "Veuillez remplir le champ 'name'";
    }
}
// Affiche un message personnalisé avec le nom de l'utilisateur en récupérant les données depuis la session.
if(isset($_SESSION['name']))
{
    echo "Bonjour, " . $_SESSION['name'] . "!";
}
// Permet de déconnecter l'utilisateur en cliquant sur un lien qui vide la session et redirige vers une page d'accueil.

if(isset($_GET["sedeconnecter"]))
{
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
    <label for="name">Utilisateur :</label>
    <input type="text" id="name" name="name"><br><br>
    <button type="submit" name="submit">Se connecter</button>
    <button type="submit" name="sedeconnecter">Se deconnecter</button>

</form>
</body>
</html>