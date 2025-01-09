<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="nom"></label>
        <input type="text" name="nom" placeholder="Nom">
    </div>
    <div>
       <label for="prenom"></label>
        <input type="text" name="prenom" placeholder="Prenom">
    </div>
    <div>
        <label for="email"></label>
        <input type="email" name="email" placeholder="Email">
    </div>
    <div><label for="motDePasse"></label>
        <input type="password" name="motDePasse" placeholder="PAPAPAAP">
    </div>
    <div>
        <label for="age"></label>
        <input type="number" name="age" placeholder="Age">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['motDePasse']) && !empty($_POST['age'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $motDePasse = password_hash($_POST['motDePasse'], PASSWORD_DEFAULT);
        $age = $_POST['age'];
        $fichier = fopen("fichier_exo_6.csv", "a");
        $contenu = [
            $nom,
            $prenom,
            $email,
            $motDePasse,
            $age
        ];
        fputcsv($fichier, $contenu, ';', '"', '\\');
    }else{
        echo 'Faux !';
    }
}
?>
</body>
</html>