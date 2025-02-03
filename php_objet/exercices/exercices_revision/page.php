<form action="" method="post">
    <button type="submit" name="nameux">Bouton</button>
</form>
<?php
if(isset($_POST['nameux'])){
    $patrick = 2;
    header('Location: class.voitureManager.php');
}
