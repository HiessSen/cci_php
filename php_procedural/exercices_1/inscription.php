<?php
session_start();
if(isset($_POST["submit"])){
    if(!empty($_POST["username"]) && strlen($_POST["username"]) > 2 && !empty($_POST["password"]) && strlen($_POST["password"]) > 5){
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        setcookie('$motDePasse', $password_hash, (time() + (3600)), "/");
        $_SESSION["username"] = $_POST["username"];
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
</head>
<body>
<form action="" method="post">
    <label for="username">
        <input type="text" name="username">
    </label>
    <label for="password">
        <input type="text" name="password">
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>
