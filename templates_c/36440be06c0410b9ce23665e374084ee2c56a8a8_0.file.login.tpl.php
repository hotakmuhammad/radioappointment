<?php
/* Smarty version 4.3.4, created on 2025-03-05 20:15:35
  from 'C:\wamp64\www\radioappointment\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67c8b0e77b9538_67467127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36440be06c0410b9ce23665e374084ee2c56a8a8' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\login.tpl',
      1 => 1741105619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c8b0e77b9538_67467127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56257194267c8b0e77b7587_38057192', "contenu");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_56257194267c8b0e77b7587_38057192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_56257194267c8b0e77b7587_38057192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Login Page</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
<?php
}
}
/* {/block "contenu"} */
}
