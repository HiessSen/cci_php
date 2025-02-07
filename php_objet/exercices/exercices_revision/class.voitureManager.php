<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
require_once 'class.voiture.php';
class VoitureManager extends Voiture{
    public function __construct($marque, $modele, $annee){
        parent::__construct($marque, $modele, $annee);
    }
    public function getAllVoitures(): void
    {
        try {
            $sql = $this->connexionBDD();
            if ($sql) {
                $requete = $sql->prepare('SELECT * FROM `voiture` ');
                if($requete->execute())
                {
                    if($requete->rowCount() > 0)
                    {
                        $resultat = $requete->fetchAll();
                        $content = '';
                        include_once 'afficherVoitures.php';
                    }
                    else
                    {
                        $content =  'Il n\'y a pas de voiture à afficher';
                        echo $content;
                    }
                }
            }
        } catch (PDOException $e) {
            echo 'La réponse est non: ' . $e->getMessage();
        }
    }

    public function ajouterVoiture(string $marque, string $modele, int $annee): void {
        try {
            $sql = self::connexionBDD();
            $requete = $sql->prepare('INSERT INTO voiture (marque, modele, annee) VALUES (:marque, :modele, :annee)');
            $requete->bindParam(':marque', $marque);
            $requete->bindParam(':modele', $modele);
            $requete->bindParam(':annee', $annee);

            if ($requete->execute()) {
                echo 'Nouveau véhicule ajouté !';
            } else {
                echo 'Erreur lors de l\'exécution de la requête';
            }
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données: ';
        }
    }
    public function supprimerVoiture(int $id): void {
        try {
            $sql = self::connexionBDD();
            $requete = $sql->prepare('DELETE FROM voiture WHERE id = :id');
            $requete->bindParam(':id', $id, PDO::PARAM_INT);
            if ($requete->execute()) {
                echo 'Véhicule supprimé !';
            } else {
                echo 'Erreur lors de l\'exécution de la requête';
            }
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données: ' . $e->getMessage();
        }
    }
}
$voirToutesLesVoitures = new VoitureManager('Marque', 'Modèle', 2000);
$voirToutesLesVoitures->getAllVoitures();