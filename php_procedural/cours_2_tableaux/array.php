<?php
$tableau1 = array('hugo', 'stéphane', 'etc');
$tableau2 = ['Ilan', 'Tanguy', 'Etc'];
$tableau3 = [
    'nom' => 'Poivre d\'Arvor',
    'prenom' => 'Patrick',
    'entreprise' => 'TF1'
];
var_dump($tableau1);
var_dump($tableau2);
var_dump($tableau3);
echo $tableau3['entreprise'];
$cle = array_search('Ilan', $tableau2);
echo '<br>'.$cle;
sort($tableau2);
var_dump($tableau2);
$tableau4 = array_merge($tableau1, $tableau2);
var_dump($tableau4);
?>

<!DOCTYPE html>
    <html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cours tableaux PHP</title>
</head>
<body>

</body>
</html>
