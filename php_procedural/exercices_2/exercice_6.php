<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 6</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="fichier1"></label>
    <input type="file" name="fichier1" id="fichier1">
    <label for="fichier2"></label>
    <input type="file" name="fichier2" id="fichier2">
    <label for="fichier3"></label>
    <input type="file" name="fichier3" id="fichier3">
    <input type="submit" name ="submit" value="Envoyer">
</form>
<?php
if(isset($_POST['submit'])){
    var_dump($_FILES);
    if(is_uploaded_file($_FILES['fichier1']['tmp_name']) && is_uploaded_file($_FILES['fichier2']['tmp_name']) && is_uploaded_file($_FILES['fichier3']['tmp_name'])){
        // Je déplace le fichier vers le dossier Upload
        if(move_uploaded_file($_FILES['fichier1']['tmp_name'], 'upload2/' . $_FILES['fichier1']['name'])){
            if(move_uploaded_file($_FILES['fichier2']['tmp_name'], 'upload2/' . $_FILES['fichier2']['name'])){
                if(move_uploaded_file($_FILES['fichier3']['tmp_name'], 'upload2/' . $_FILES['fichier3']['name'])){
                    echo '<div>';
                    echo '<img src="upload/' . $_FILES['fichier1']['name'] . '" alt="Image uploadée">';
                    echo '<img src="upload/' . $_FILES['fichier2']['name'] . '" alt="Image uploadée">';
                    echo '<img src="upload/' . $_FILES['fichier3']['name'] . '" alt="Image uploadée">';
                    echo '</div>';
                }
            }
        }
    }else{
        echo '<p> Erreur !!! 3 fichiers doivent être uploadés </p>';
    }
}
?>
</body>
</html>