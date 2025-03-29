<?php
/* Smarty version 4.3.4, created on 2025-03-15 15:22:29
  from 'C:\wamp64\www\radioappointment\views\edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d59b35354b82_45405369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d1280a7f614edc7aad90fd51fdcf72625e83b0' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\edit_profile.tpl',
      1 => 1742052144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d59b35354b82_45405369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148360457067d59b353276b1_80488233', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_148360457067d59b353276b1_80488233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_148360457067d59b353276b1_80488233',
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
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile" method="post" >
            <fieldset>
                <legend>Informations personnelles</legend>
                <p>
                    <label for="name">Nom</label>
                    <input type="text" name="firstName" id="firstName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
">
                </p>
                <p>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="lastName" id="lastName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstname();?>
">
                </p>
                <p>
                    <label for="mail">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
">
                </p>
                <p>
                    <label for="mail">Phone</label>
                    <input type="tel" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
">
                </p>
                            </fieldset>
            <fieldset>
                <legend>Informations de connexion</legend>
                <p>
                    <label for="password_old">Mot de passe actuel</label>
                    <input type="password" name="oldPassword" id="oldPassword">
                </p>
                <p>
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" name="password" id="password">
                </p>
                <p>
                    <label for="passwd_confirm">Confirmation du mot de passe</label>
                    <input type="password" name="confirmPassword" id="confirmPassword">
                </p>
            </fieldset>
            <p>
            Sqaan@444$hello124578
            Sqaan@444$hello1245
                <input type="submit" />
            </p>		
        </form>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
