<?php
if (isset($_POST['submit'])) {
    if(!empty($_POST['connaissance'])){
        foreach ($_POST['connaissance'] as $valeur) {
            echo $valeur . ' ';
            echo "<br>";
        }
        echo 'Vous avez coché ' . count($_POST['connaissance']) . ' connaissances';
    }else{
        echo 'Vous n\'avez rien coché';
    }
}
