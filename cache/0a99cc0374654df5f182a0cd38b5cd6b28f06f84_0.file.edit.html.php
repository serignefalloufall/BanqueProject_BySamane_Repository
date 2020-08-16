<?php
/* Smarty version 3.1.30, created on 2020-08-16 19:32:37
  from "/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f396db53212b0_36963250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a99cc0374654df5f182a0cd38b5cd6b28f06f84' => 
    array (
      0 => '/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/edit.html',
      1 => 1597599150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f396db53212b0_36963250 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion Client</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/menu.css" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/gestionClient.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/gestionClient.css" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/gestionCompte.css" />

    <?php echo '<script'; ?>

      src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/gestionClient.js"
      type="text/javascript"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/gestionCompte.js"
      type="text/javascript"
    ><?php echo '</script'; ?>
>
  </head>
  <body>
    <nav>
      <ul class="menu">
        <li class="logo"><a href="#">La banque du peuple</a></li>
        <li class="item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Gestion des clients</a>
        </li>
        <li class="item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Gestion des comptes client</a>
        </li>
        <li class="item">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Liste clients</a>
        </li>

      </ul>
    </nav>
   
    <div class="contenue">
      <div class="error" id="message_error"></div>
      <form
        action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update"
        method="POST"
        class="formClient"
        id="formClient"
        onsubmit="return validationClient()"
      >
        <fieldset class="fieldset">
          <legend class="legend">Gestion des clients:</legend>
          <div class="itemFieldset">

            <div>
              <label for="">Nom</label>
              <input type="text" name="nom" id="nom" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
 <?php }?>" />
            </div>
            <div>
              <label for="">Prenom</label>
              <input
                type="text"
                name="prenom"
                id="prenom"
                value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
 <?php }?>"
              />
            </div>

            <div>
              <label for="">Adresse</label>
              <input
                type="text"
                name="adresse"
                id="adresse"
                value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
 <?php }?>"
              />
            </div>

            <div>
              <label for="">Telephone</label>
              <input
                type="text"
                name="tel"
                id="tel"
                value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getTel();?>
 <?php }?>"
              />
            </div>

            <div>
              <label for="">Email</label>
              <input
                type="text"
                name="email"
                id="email"
                value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>
 <?php }?>"
              />
            </div>
			<div class="btnSave">
				<input
				  type="submit"
				  name="modifier"
				  class="btn"
				  value="Modifier"
				/>
			  </div>
         
          </div>
        </fieldset>

      </form>
    </div>
  </body>
</html>
<?php }
}
