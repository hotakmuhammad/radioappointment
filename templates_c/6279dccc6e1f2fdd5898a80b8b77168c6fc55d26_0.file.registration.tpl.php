<?php
/* Smarty version 4.3.4, created on 2025-03-09 21:28:13
  from 'C:\wamp64\www\radioappointment\views\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ce07ed6c1d64_43613679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6279dccc6e1f2fdd5898a80b8b77168c6fc55d26' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\registration.tpl',
      1 => 1741555690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/header.tpl' => 1,
  ),
),false)) {
function content_67ce07ed6c1d64_43613679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174127817067ce07ed494002_02200126', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_174127817067ce07ed494002_02200126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_174127817067ce07ed494002_02200126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>

        <div class="alert alert-danger form-container mt-3 mb-3">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>

                <p><?php echo $_smarty_tpl->tpl_vars['strError']->value;?>
</p>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>

    <?php }?>
    <h1>Creation account Page</h1>
    <div class="container">
        <form action="" method="post" style="border:1px solid #ccc">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Nom</b></label>
        <input type="text" placeholder="Enter Name" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
">

        <label for="firstName"><b>Prénom</b></label>
        <input type="text" placeholder="Enter Surname" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getLastName();?>
">


        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
">


        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
">

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" placeholder="Enter Password" name="password" >

        <label for="psw-repeat"><b>Confirmez mot de passe</b></label>
        <input type="password" placeholder="Confirmation du mot de passe" name="confirm-password" >
        
        <label>Profile picture </b></label>
            
        <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getProfilePic() != '') {?>
            <img src="uploads/<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getProfilePic();?>
">
        <?php }?>
        <input id="" type="file" accept="image/*" name="profilePic" value="">
    
    </div>

    <div>
            </div>
    <div>
    Sqaan@444$hello124578
        <input type="submit" value="Creer compte">

  </div>
</form>
<?php
}
}
/* {/block "contenu"} */
}
