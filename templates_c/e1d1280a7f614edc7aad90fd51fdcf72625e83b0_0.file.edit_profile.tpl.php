<?php
/* Smarty version 4.3.4, created on 2025-03-13 20:48:38
  from 'C:\wamp64\www\radioappointment\views\edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d344a61fa764_29816126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d1280a7f614edc7aad90fd51fdcf72625e83b0' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\edit_profile.tpl',
      1 => 1741898914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d344a61fa764_29816126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145579797267d344a61f33e9_90634832', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_145579797267d344a61f33e9_90634832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_145579797267d344a61f33e9_90634832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>

        <div class="">
            <ul>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>

                    <li><?php echo $_smarty_tpl->tpl_vars['strError']->value;?>
</li>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

        </div>

    <?php }?>

    <h1>Modification</h1>
    <div class="container">
        <form action="" method="post" style="border:1px solid #ccc">
            <fieldset class="col-12 col-md-6">

                <legend class="green-title">Informations personnelles</legend>

                <div class="form-group mt-3">

                    <label for="name">Nom</label>

                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstname();?>
">

                </div>

                <div class="form-group mt-3">

                    <label for="firstname">Prénom</label>

                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getLastName();?>
">

                </div>

                <div class="form-group mt-3">

                    <label for="mail">Email</label>

                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
">

                </div>

                <div class="form-group mt-3">

                    <label for="mail">Phone</label>

                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
">

                </div>

            </fieldset>
                <fieldset>
                    <legend>Informations de connexion</legend>
                    <p>
                        <label for="password_old">Mot de passe actuel</label>
                        <input type="password" name="oldPassword" id="password_old">
                    </p>
                    <p>
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password">
                    </p>
                    <p>
                        <label for="passwd_confirm">Confirmation du mot de passe</label>
                        <input type="password" name="confirm-password" id="confirm-password">
                    </p>
            </fieldset>

            <div>
                            </div>
            <div>
            Sqaan@444$hello124578
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
