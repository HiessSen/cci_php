<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="prenom"></label>
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
    </div>
    <div>
        <label for="nom"></label>
        <input type="text" name="nom" id="nom" placeholder="nom">
    </div>
    <div>
        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="email">
    </div>
    <div>
        <label for="sujet"></label>
        <input type="text" name="sujet" id="sujet" placeholder="sujet">
    </div>
    <div>
        <label for="message"></label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['sujet']) && !empty($_POST['message'])){
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $fichier = fopen("fichier_exo_4.txt", "a");
        fwrite($fichier, $prenom . ' - ' . $nom . ' - ' . $email . ' - ' . $sujet . ' - ' . $message);
    }else{
        echo 'Faux !';
    }
}
?>
</body>
</html>
