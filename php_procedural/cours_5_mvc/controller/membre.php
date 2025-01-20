<?php
if(verifierToken($_GET['token']) == FALSE){
    header('Location: index.php?route=login');
    exit();
}