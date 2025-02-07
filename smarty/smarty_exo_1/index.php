<?php
require_once 'libs/Smarty.class.php';
require_once 'variables.php';
$smarty = new Smarty();
$smarty->setTemplateDir('template/');
$smarty->setCacheDir('cache/');
$smarty->setCompileDir('template_c/');
// J'assigne des valeurs à mes variables
$smarty->assign('articles', $articles);
$smarty->assign('commentaires', $commentaires);
$smarty->display('template.tpl');