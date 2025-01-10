<!--C'est le fichier d'entrée qui va rerouter sur toutes les autres pages (vues)-->
<!--Les routes vont être gerées avec un switch case-->
<?php
// Je gere le cas ou aucune route n'est passée en argument
if(!empty($_GET['route']))
{
    $route = $_GET['route'];
}
else
{
    $route = null;
}
switch($route)
{
    // Pour la vue inscription
    case 'inscription':
        // J'instancie le titre de la page
        $titrePage = "Inscription";
        // Je charge le model et le controller
        require_once ('model/inscription.php');
        require_once ('controller/inscription.php');
        // Je charge le template
        $template = file_get_contents('view/inscription.html');
        // Je remplace ma variable {ERREUR} par la variable $message
        $template = str_replace('{ERREUR}', $message, $template);
    break;
    // Pour la vue connexion
    case 'connection':
        // J'instancie le titre de la page
        $titrePage = "Connection";
        // Je charge le model et le controller
        require_once ('model/connection.php');
        require_once ('controller/connection.php');
        // Je charge le template
        $template = file_get_contents('view/connection.html');
        // Je remplace ma variable {ERREUR} par la variable $message
        $template = str_replace('{ERREUR}', $message, $template);
        break;
    // Pour la vue membre
    case 'membre' :
        // J'instancie le titre de la page
        $titrePage = "Membre";
        require_once ('model/connection.php');
        require_once ('controller/connection.php');
        $template = file_get_contents('view/membre.php');
        $template = str_replace('{ERREUR}', $message, $template);
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
