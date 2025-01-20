<form action="" method="post">
    <label for="nom">Votre nom ?
        <input type="text" name="nom" id="nom" />
    </label>
    <label for="quantite">Quelle quantite ?
        <input type="number" name="quantite" id="quantite" />
    </label>
    <button name="submit">Valider</button>
    <button name="vider">Vider</button>
</form>
<?php
session_start();
// Initialisation du panier si nécessaire
if (!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = [];
}
function ajouterProduitPanier()
{
    $_SESSION['panier'][] = ['produit' => $_POST['nom'], 'quantite' => $_POST['quantite']];
    return $_SESSION['panier'];
}
function viderPanier()
{
    $_SESSION['panier'] = [];
}
if(isset($_POST['submit']))
{
    ajouterProduitPanier();
}
if(isset($_POST['vider']))
{
    viderPanier();
}
//var_dump($_SESSION['panier']);
foreach ($_SESSION['panier'] as $produit){
    echo $produit['produit'] . ' ' .$produit['quantite'] . '<br>';
}