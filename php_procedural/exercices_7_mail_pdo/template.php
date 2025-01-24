<?php
$fichier = file_get_contents('mail.html');
$fichier = str_replace('[PRENOM]',$_POST['prenom'],$fichier);
$fichier = str_replace('[NOM]','Votre nom',$fichier);
$fichier = str_replace('[CLE]','La clé',$fichier);
$mail->body = $fichier;
?>