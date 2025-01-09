<?php
setcookie("prenom", "Élodie", time()+3600);
if(isset($_COOKIE["prenom"])){
    echo 'Bonjour ' . $_COOKIE["prenom"] . '. Content de vous revoir';
}