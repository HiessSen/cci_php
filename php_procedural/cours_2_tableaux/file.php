<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours file PHP</title>
</head>
<body>
    <h1>Envoi de fichier en PHP</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fichier"></label>
        <input type="file" name="fichier">
        <input type="submit" name="submit" value="Envoyer">
    </form>
    <?php
    $extension = ['.jpg', '.jpeg', '.png', '.gif', '.pdf', '.JPG', '.JPEG', '.GIF', '.PDF'];
    if(isset($_POST['submit'])){
        var_dump($_FILES);
        if(is_uploaded_file($_FILES['fichier']['tmp_name'])){
            // Je récupère l'extension du fichier avec la fonction strrchr
            $verifExtension = strrchr($_FILES['fichier']['name'], '.');
            // Je verifie que l'extension est dans le tableau $extension avec in_array
            if(in_array($verifExtension, $extension)){
                $nouveauNom = uniqid().$verifExtension;
                // Je déplace le fichier vers le dossier Upload
                if(move_uploaded_file($_FILES['fichier']['tmp_name'], 'upload/' . $nouveauNom)){
                    // echo '<div><img src="upload/' . $nouveauNom . '" alt="Image uploadée"></div>';
                    header('location:upload/' . $nouveauNom);
                }
            }else{
                echo '<h1>ERREUR !!!!! ' . $verifExtension . ' n\'est pas une extension autorisée</h1>';
            }
        }
    }
    ?>
</body>
</html>