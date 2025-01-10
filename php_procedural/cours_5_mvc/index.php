// C'est le fichier d'entrée qui va rerouter sur toutes les autres pages (vues)
// Les routes vont être gerées avec un switch case
<?php
switch($_GET['route'])
{
    // Pour la vue inscription
    case 'inscription':
        $titrePage = "Inscription";
        $template = file_get_contents('view/inscription.html');
        break;
    // Pour la vue connexion
    case 'connexion':
        echo 'Oui c\'est toi';
        break;
    // Pour la vue membre
    case 'membre' :
        echo 'PHP c\'est rigolo';
        break;
    // vue par defaut (page index)
    default:
        $titrePage = 'Accueil';
        $template = file_get_contents('view/index.html');
        break;
}
include 'view/header.php';
echo $template;
include 'view/footer.php';
