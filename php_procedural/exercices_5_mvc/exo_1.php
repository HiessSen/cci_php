<?php
session_start();
// Initialisation du panier si nécessaire
if (!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = [];
}
function ajouterProduitPanier($produit, $quantite)
{
    // Ajout d'un élément au panier sous forme de tableau associatif
    $_SESSION['panier'][] = ['produit' => $produit, 'quantite' => $quantite];
    return $_SESSION['panier'];
}
function viderPanier()
{
    $_SESSION['panier'] = [];
}
ajouterProduitPanier('PS5', 2);
ajouterProduitPanier('Samsung', 1);
ajouterProduitPanier('Ciseaux', 3);
//viderPanier();
var_dump($_SESSION['panier']);