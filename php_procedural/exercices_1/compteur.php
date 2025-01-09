<?php
session_start();
if(isset($_SESSION)){
    $_SESSION['nbVisites']++;
}else{
    $_SESSION['nbVisites'] = 0;
}
echo 'C\'est votre visite numéro ' . $_SESSION['nombre'];