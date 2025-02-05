<?php
require_once 'class.voitureManager.php';
if (isset($_POST['supprimer'])) {
        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $annee = $_POST['annee'];
        try {
            $vehiculeAjoute->ajouterVoiture($id);
            header('Location: class.voitureManager.php');
        } catch (Exception $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}