<?php
//var_dump($_POST);
if(isset($_POST['submit'])){
    if(!empty($_POST['password'])){
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        setcookie('$motDePasse', $password_hash, (time() + (3600)), "/");
        echo $password_hash . ' ' . $_POST['email'];
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supervariable Post</title>
</head>
<body>
<form name="inscription" action="" method="post">
    <label for="email"></label>
    <input type="text" name="email" id="email">
    <label for="password"></label>
    <input type="text" name="password" id="password">
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>