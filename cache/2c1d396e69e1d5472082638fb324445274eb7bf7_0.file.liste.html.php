<?php
/* Smarty version 3.1.30, created on 2020-08-16 18:42:39
  from "/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3961ff46b827_04620440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c1d396e69e1d5472082638fb324445274eb7bf7' => 
    array (
      0 => '/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/liste.html',
      1 => 1597596150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3961ff46b827_04620440 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstra.css" />


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
Client/add"
        method="POST"
        class="formClient"
        id="formClient"
        onsubmit="return validationClient()"
      >
        <fieldset class="fieldset">
          <legend class="legend">Liste des clients</legend>
          <div class="itemFieldset">
			<div>
					
				<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['clients']->value != null) {?>
						<table class="table">
							<tr>
								<th>Identifiant</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Adresse</th>
								<th>Telephone</th>
								<th>Email</th>
								<th>Profession</th>
								<th>Action</th>
								<th>Action</th>
							</tr>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getTel();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getEmail();?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['client']->value->getProfession();?>
</td>
									<td><a class="link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">Supprimer</a></td>
									<td><a class="link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value->getId();?>
">Editer</a></td>
								</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</table>
					<?php } else { ?>
						Liste vide
					<?php }?>
				<?php }?>
			</div>
		  </div>
		  <button class="btna">
			<a class="link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Nouveau client</a>
		</button>	
        </fieldset>

       
      </form>
    </div>
  </body>
</html>
<?php }
}
