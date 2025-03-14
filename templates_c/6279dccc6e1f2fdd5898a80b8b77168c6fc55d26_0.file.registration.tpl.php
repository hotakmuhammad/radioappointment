<?php
/* Smarty version 4.3.4, created on 2025-03-14 14:56:47
  from 'C:\wamp64\www\radioappointment\views\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d443afcb7481_30737755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6279dccc6e1f2fdd5898a80b8b77168c6fc55d26' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\registration.tpl',
      1 => 1741964204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/header.tpl' => 1,
  ),
),false)) {
function content_67d443afcb7481_30737755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152230835367d443afc8c1a6_58460638', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_152230835367d443afc8c1a6_58460638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_152230835367d443afc8c1a6_58460638',
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

    
    <h1>Creation account Page</h1>
    <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user/registration" method="post" style="border:1px solid #ccc">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="firstName"><b>Nom</b></label>
            <input type="text" placeholder="Enter Name" id="firstName" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
">

            <label for="lastName"><b>Prénom</b></label>
            <input type="text" placeholder="Enter Surname" id="lastName" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getLastName();?>
">


            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
">


            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
">

            <label for="password"><b>Mot de passe</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" >

            <label for="psw-repeat"><b>Confirmez mot de passe</b></label>
            <input type="password" placeholder="Confirmation du mot de passe" id="confirmPassword" name="confirmPassword" >

            

            <div>
                            </div>
            <div>
            Sqaan@444$hello124578
                <input type="submit" value="Créer compte">
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
