<?php
// J'active les sessions
session_start();
// Je charge le fichier function.php;
require_once ('function.php');
// Je génère le token
$token = genererToken();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test token</title>
</head>
<body>
<a href="page.php?token=<?=$token;?>">Acceder à ma page</a>
<a href="password.php">Mot de passe</a>
</body>
</html>
