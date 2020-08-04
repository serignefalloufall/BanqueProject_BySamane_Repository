<?php
/* Smarty version 3.1.30, created on 2020-08-04 18:25:43
  from "/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f298c07f3a718_15215421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ef9c7229ea32fc5c433fbc3980cffb90804fe2' => 
    array (
      0 => '/opt/lampp/htdocs/mes_projets/BanqueProjectBySamane/src/view/client/add.html',
      1 => 1596558342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f298c07f3a718_15215421 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Client</title>
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
    <div class="contenue">
        <div class="error" id="message_error"></div>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add" method="POST" class="formClient" id="formClient" onsubmit="return validationClient()">

            <fieldset class="fieldset">
                <legend class="legend">Gestion des clients:</legend>
                <div class="itemFieldset">
                
                    <div>
                        <label for="">Type de client:</label>
                        <select name="type_client_id" id="type_client_id" onchange="verifTypeClient()">
                            <option value="">Choisir un type de client</option>
                            <?php if (isset($_smarty_tpl->tpl_vars['listeTypeClient']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['listeTypeClient']->value != null) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeTypeClient']->value, 'l_typeClient');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l_typeClient']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['l_typeClient']->value->getId();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['l_typeClient']->value->getLibelle();?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php } else { ?>
							Liste vide
						    <?php }?>
					        <?php }?>
                           
                        </select>

                        

                    </div>
            
                    <div>
                        <label for="">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Nom.....">
                    </div>
                    <div>
                        <label for="">Prenom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prenom.....">
                    </div>

                    <div>
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" id="adresse" placeholder="Adresse.....">
                    </div>

                    <div>
                        <label for="">Telephone</label>
                        <input type="text" name="tel" id="tel" placeholder="Telephone.....">
                    </div>

                    <div>
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email.....">
                    </div>

                    <div id="listeEmployeur" class="listeEmployeur">
                        <label for="">Liste employeur:</label>
                        <select name="employeur_id" id="employeur_id">
                            <option value="">Votre entreprise</option>
                            <?php if (isset($_smarty_tpl->tpl_vars['listeEmployeur']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['listeEmployeur']->value != null) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEmployeur']->value, 'l_emp');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l_emp']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['l_emp']->value->getId();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['l_emp']->value->getNom_employeur();?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php } else { ?>
							Liste vide
						    <?php }?>
					        <?php }?>
                        </select>

                    </div>

                </div>

            </fieldset> 
            
            <fieldset class="fieldset" id="emp">
                <legend class="legend">Information supplémentaire:</legend>
                <div class="itemFieldset">

                    <div>
                        <label for="">Salaire</label>
                        <input type="text" name="salaire" id="salaire" value="" placeholder="Salaire....." placeholder="salaire">
                    </div>

                    <div>
                        <label for="">Profession</label>
                        <input type="text" name="profession" id="profession" placeholder="Profession....."> 
                    </div>
                    <div id="ninea">
                        <label for="">Ninea</label>
                        <input type="text" name="numIdentification" id="numIdentification" placeholder="Num identification.....">
                    </div>

                    <div id="raisonsocial">
                        <label for="">Raison social</label>
                        <input type="text" name="raisonSocial" id="raisonSocial" placeholder="Raison social.....">
                    </div>

                    <div id="nomemployeur">
                        <label for="">Nom entreprise</label>
                        <input type="text" name="nom_employeur" id="nom_employeur" placeholder="Nom entreprise.....">
                    </div>
                   
                    <div id="adresseemployeur">
                        <label for="">Adresse entreprise</label>
                        <input type="text" name="adresse_employeur" id="adresse_employeur" placeholder="Adresse entreprise.....">
                    </div>


                </div>
                <div class="btnSave">
                    <input type="submit" name="btnAjouter" class="btn" value="Enregistrer"/>
                </div>
            </fieldset>    
        </form>  
    </div>
    </body>
</html>
<?php }
}
