<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['nom']) && !empty($_POST['password'])) {
        echo 'Bienvenue, ' . $_POST['nom'] . ', votre compte est sécurisé ';
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<form action="" method="post">
    <label for="nom">Votre nom</label>
    <input type="text" name="nom" id="nom">
    <label for="password">Votre mot de passe</label>
    <input type="text" name="password" id="password">
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>