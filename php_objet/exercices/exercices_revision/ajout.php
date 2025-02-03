<?php
require_once 'class.voitureManager.php';
if (isset($_POST['submit'])) {
    if (!empty($_POST['marque']) && !empty($_POST['modele']) && !empty($_POST['annee'])) {
        $marque = $_POST['marque'];
        $modele = $_POST['modele'];
        $annee = $_POST['annee'];
        try {
            $vehiculeAjoute = new VoitureManager($marque, $modele, $annee);
            $vehiculeAjoute->ajouterVoiture($marque, $modele, $annee);
            header('Location: class.voitureManager.php');
        } catch (Exception $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}