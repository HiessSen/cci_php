<?php
require_once 'libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir('template');
$smarty->setCacheDir('cache');
$smarty->setCompileDir('templates_c');
// J'assigne des valeurs à mes variables
$smarty->assign('titre','Super logiciel de con');
$smarty->assign('contenu','Jaime pas');
// J'affiche le template avec les variables
$smarty->display('template.tpl');
?>