<?php
/* Smarty version 4.3.4, created on 2025-02-07 08:05:13
  from 'E:\wamp64\www\cci_php\smarty\smarty_exo_1\template\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67a5beb9198244_68464481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c81559b7626b3f4cab75f35f6280717ce0c16d' => 
    array (
      0 => 'E:\\wamp64\\www\\cci_php\\smarty\\smarty_exo_1\\template\\template.tpl',
      1 => 1738915511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a5beb9198244_68464481 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template Smarty - exo 1</title>
    <link rel="stylesheet" type="text/css" href="<?php echo (defined('STYLESHEET_PATH') ? constant('STYLESHEET_PATH') : null);?>
css/style.css">
</head>
<body>
<div id="container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
        <div id="article">
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['contenu'];?>
</p>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value['auteur'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</p>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commentaires']->value, 'commentaire');
$_smarty_tpl->tpl_vars['commentaire']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commentaire']->value) {
$_smarty_tpl->tpl_vars['commentaire']->do_else = false;
?>
                <div id="commentaire">
                <?php if ($_smarty_tpl->tpl_vars['article']->value['id'] == $_smarty_tpl->tpl_vars['commentaire']->value['article_id']) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['commentaire']->value['auteur'];?>
</p>
                    <p><?php echo $_smarty_tpl->tpl_vars['commentaire']->value['contenu'];?>
</p>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</body>
</html>
<?php }
}
