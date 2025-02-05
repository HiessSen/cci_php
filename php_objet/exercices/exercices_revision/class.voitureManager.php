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
                        $content = '<table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Année</th>
                        </tr>
                        </thead>
                        <tbody>';
                        foreach($resultat as $voiture)
                        {
                            $content .= '<tr><td>' . $voiture['id'] . '</td><td>' . $voiture['marque'] . '</td><td>' . $voiture['modele'] . '</td><td>' . $voiture['annee'] . '</td><td><button name="supprimer">Supprimer</button></button></td></tr> '.PHP_EOL;
                        }
                        $content .=  '</tbody>
                        </table>';
                        echo $content;
                    }
                    else
                    {
                        $content =  'Il n\'y a pas de voiture à afficher';
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