<?php
/* Smarty version 3.1.30, created on 2020-08-15 22:39:27
  from "/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/compte/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3847ff552d18_31282768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a104dfe3f749a8d02ac39c5d5794759a35d255' => 
    array (
      0 => '/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/compte/add.html',
      1 => 1597523962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3847ff552d18_31282768 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion Compte</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/menu.css" />

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
    <?php echo '<script'; ?>

      src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.min.js"
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
      </ul>
    </nav>
    <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
    <div style="margin-top: 410px;font-size: 35px;color: #02a1a1;margin-left: 130px;">Client inseré avec succès </div>
    <?php } else { ?>
    <divstyle="margin-top: 50px; font-size: 35px; color: red; margin-left: 130px;">
      Erreur d'insertion
    </div>
    <?php }?>
    <?php }?>
    <div class="contenue">
      <div class="error" id="message_error"></div>
      <form
        action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add"
        method="POST"
        class="formClient"
        id="formClient"
      >
        <fieldset class="fieldset">
          <legend class="legend">Rechercher client</legend>
          <div class="itemFieldset">
            <div>
              <label for="">Client:</label>
              <select
                name="client_id"
                id="client_id"
                onchange="verifTypeClient()"
              >
                <option value="">Choisir client</option>
                <?php if (isset($_smarty_tpl->tpl_vars['listeClient']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['listeClient']->value != null) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeClient']->value, 'l_client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l_client']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['l_client']->value->getId();?>
">
                  <?php echo $_smarty_tpl->tpl_vars['l_client']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['l_client']->value->getNom();?>

                </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php } else { ?> Liste vide <?php }?> <?php }?>
              </select>
            </div>
            <div>
              <label for="">CNI</label>
              <input type="text" name="cni" id="cni" value="" />
            </div>
          </div>
        </fieldset>

        <fieldset class="fieldset" id="emp">
          <legend class="legend">Gestion compte:</legend>
          <div class="itemFieldset">
            <div>
              <label for="">Type de compte:</label>
              <select
                name="type_compte_id"
                id="selectCompte"
                onchange="myFunction()"
              >
                <option value="">Choisir un type de compte</option>

                <?php if (isset($_smarty_tpl->tpl_vars['listeTypeCompte']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['listeTypeCompte']->value != null) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeTypeCompte']->value, 'l_typeCompte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l_typeCompte']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['l_typeCompte']->value->getId();?>
">
                  <?php echo $_smarty_tpl->tpl_vars['l_typeCompte']->value->getLibelle();?>

                </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php } else { ?> Liste vide <?php }?> <?php }?>
              </select>
            </div>
            <div>
              <label for="">Date d'ouverture</label>
              <input
                type="text"
                name="date_ouverture"
                id="date"
                value="<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
"
                readonly
              />
            </div>
            <div>
              <label for="">Numero compte</label>
              <input
                type="text"
                name="num_compte"
                id="numCompte"
                value="<?php echo $_smarty_tpl->tpl_vars['numcompte']->value;?>
"
                readonly
              />
            </div>
            <div>
              <label for="">Numero agence</label>
              <select name="agence_id" id="agence_id">
                <option value="">Votre agence</option>

                <?php if (isset($_smarty_tpl->tpl_vars['listeAgence']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['listeAgence']->value != null) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAgence']->value, 'l_compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l_compte']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['l_compte']->value->getId();?>
">
                  <?php echo $_smarty_tpl->tpl_vars['l_compte']->value->getNom();?>

                </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 <?php } else { ?> Liste vide <?php }?> <?php }?>
              </select>
            </div>
            <div>
              <label for="">Cle rip</label>
              <input
                type="text"
                name="cle_rip"
                id="cleRip"
                value="<?php echo $_smarty_tpl->tpl_vars['cleRip']->value;?>
"
                readonly
              />
            </div>

            <div class="dfermuture" id="dfermuture">
              <label for="">Date fermuture</label>
              <input
                type="date"
                name="date_fermuture"
                id="date_fermuture"
                value=""
              />
            </div>

            <div class="frais" id="frais">
              <label for="">Frais ouverture</label>
              <input
                type="text"
                name="frais_ouverture"
                id="fouverture"
                placeholder="Frais d'ouverture....."
              />
            </div>

            <div class="agio" id="agio">
              <label for="">Montant agio</label>
              <input
                type="text"
                name="agio"
                id="agio"
                placeholder="L'agio....."
              />
            </div>
          </div>

          <div class="btnSave">
            <input
              type="submit"
              name="btnAjouter"
              class="btn"
              value="Enregistrer"
            />
          </div>
        </fieldset>
      </form>
    </div>
    <?php echo '<script'; ?>
>
      $(document).ready(function () {
        $('#cni').keyup(function () {
          //alert($("#cni").val())
          cni = $('#cni').val()
          $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/rechercher/' + cni,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
              alert(data)
            },
            error: function (resultat, statut, erreur) {},
          })
        })
      })
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
