<?php
// Si prénom n'est pas vide
if(!empty($_GET['prenom'])){
    // j'affiche le prénom
    echo 'Votre prenom est : '.$_GET['prenom'];
}else{
    echo 'Votre prenom est vide !';
}
?>