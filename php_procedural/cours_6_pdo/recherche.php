<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
// Je vais regarder si j'ai une recherche en cours en GET
if(isset($_GET['recherche']))
{
    // Je verifie avec empty si il y a bien un terme de recherche
    if(!empty($_GET['recherche']))
    {
        // Je sécurise le terme recherché avec strips_tags.
        // Cette fonction tout le code (html, css, javascript, php, etc.)
        $recherche = strip_tags($_GET['recherche']);
        $sql = 'SELECT * FROM utilisateur WHERE (nom LIKE :recherche) OR (prenom LIKE :recherche) OR (email LIKE :recherche)';
        // Je prépare ma requête SQL
        $req = $dbh->prepare($sql);
        // Je fais passer mon paramètre :recherche
        // J'ajoute les % à ma requête
        $recherche = '%'.$recherche.'%';
        $req->bindParam(':recherche', $recherche, PDO::PARAM_STR);
        // J'exécute ma requête
        if($req->execute())
        {
            $nb_resultat = $req->rowCount();
            if($nb_resultat > 0)
            {
                // J'enregistre dans la variable $resultat sous forme de talbeau associatif
                $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
                // J'affiche le tableau de resultat
                // var_dump($resultat);
                $html =
                    '<table>
                        <thead>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Action</th>
                            </tr>
                        </thead>';
                // Je fais ma boucle pour afficher les utilisateurs
                foreach($resultat as $row)
                {
                    $html .=
                        '<tr>
                            <td>'.$row['nom'].'</td>
                            <td>'.$row['prenom'].'</td>
                            <td>'.$row['email'].'</td>';
                    // J'ajoute un lien pour supprimer une ligne
                    $html .= '<td>
                        <a href="delete.php?id='.$row['id'].'">Supprimer</a>
                    </td>
                    </tr>';
                }
                // Je ferme mon tableau
                $html .=
                    '</tbody>
                    </table>';
            }
        }
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche</title>
</head>
<body>
<h1>Recherche d'un utilisateur</h1>
<form name="php" method="GET">
    <div>
        <label for="recherche">Rechercher un utilisateur
            <input type="text" name="recherche" id="recherche">
        </label>
    </div>
    <button type="submit" name="submit">Chercher</button>
</form>
<?php
    if(isset($html)) echo $html;
?>
</body>
</html>
