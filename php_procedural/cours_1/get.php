<?php
// var_dump($_GET); // Affichage de l'information passé en GET
// je vérifie si le formulaire a été soumis
if(isset($_GET['submit'])){
    // Si prénom n'est pas vide
    if(!empty($_GET['prenom'])){
        // j'affiche le prénom
        echo 'Votre prenom est :'.$_GET['prenom'];
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervariable GET</title>
</head>
<body>
<form name="test" action="" method="GET">
<!--    <label for="nom">Nom : </label>-->
<!--    <input type="text" name="nom">-->
    <label for="prenom">Prenom : </label>
    <input type="text" name="prenom">
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>