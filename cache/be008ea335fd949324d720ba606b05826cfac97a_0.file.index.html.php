<?php
/* Smarty version 3.1.30, created on 2020-08-05 11:24:55
  from "/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2a7ae730b204_67109029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be008ea335fd949324d720ba606b05826cfac97a' => 
    array (
      0 => '/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/welcome/index.html',
      1 => 1596619489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2a7ae730b204_67109029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accuiel</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/menu.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/gestionClient.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/gestionCompte.css">

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/gestionClient.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/gestionCompte.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        
    </head>
    <body>
        <nav>
            <ul class="menu">
                <li class="logo"><a href="#">La banque du peuple</a></li>
                <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Gestion des clients</a></li>
                <li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Gestion des comptes client</a></li>
            </ul>
        </nav>
        
        
        
       

    </body>
</html><?php }
}
