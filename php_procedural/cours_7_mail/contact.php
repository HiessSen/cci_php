<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nous contacter</title>
</head>
<body>
<form name="contact" action="formulaire.php" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom">
    </div>
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">
    </div>
    <div>
        <label for="email">Adresse mail</label>
        <input type="text" name="email" >
    </div>
    <div>
        <label for="sujet">Sujet</label>
        <input type="text" name="sujet">
    </div>
    <div>
        <label for="message">Message</label>
        <textarea name="message"></textarea>
    </div>
    <button name="submit" type="submit">Nique l'éducation nation nationale</button>
</form>
</body>
</html>