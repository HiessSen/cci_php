<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="fichier"></label>
    <input type="file" name="fichier" id="fichier">
    <input type="submit" name="submit" value="Envoyer">
</form>
<?php
$extension = ['.jpg', '.jpeg', '.png', '.gif', '.pdf', '.JPG', '.JPEG', '.GIF', '.PDF'];
if(isset($_POST['submit'])){
    var_dump($_FILES['fichier']);
    if(is_uploaded_file($_FILES['fichier']['tmp_name'])){
        if($_FILES['fichier']['size'] < 1000000){
            // Je récupère l'extension du fichier avec la fonction strrchr
            $verifExtension = strrchr($_FILES['fichier']['name'], '.');
            // Je verifie que l'extension est dans le tableau $extension avec in_array
            if(in_array($verifExtension, $extension)){
                // Je déplace le fichier vers le dossier Upload
                if(move_uploaded_file($_FILES['fichier']['tmp_name'], 'upload/' . $_FILES['fichier']['name'])){
                    echo '<div><img src="upload/' . $_FILES['fichier']['name'] . '" alt="Image uploadée"></div>';
                    echo '<p>Nom : ' . $_FILES['fichier']['name'] . '</p>';
                    echo '<p>Nom temporaire: ' . $_FILES['fichier']['tmp_name'] . '</p>';
                    echo '<p>Taille : ' . $_FILES['fichier']['size'] . ' o</p>';
                }
            }else{
                echo '<h1>ERREUR !!!!! ' . $verifExtension . ' n\'est pas une extension autorisée</h1>';
            }
        }else{
            echo '<h1>ERREUR !!!!! ' . $_FILES['fichier']['size'] . ' octets est une trop grande taille !</h1>';
        }
    }else{
        echo '<h1>ERREUR !!!!! Vous devez choisir un fichier !</h1>';
    }
}
?>
</body>
</html>