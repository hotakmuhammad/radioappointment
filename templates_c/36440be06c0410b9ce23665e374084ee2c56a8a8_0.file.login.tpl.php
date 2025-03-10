<?php
/* Smarty version 4.3.4, created on 2025-03-10 20:30:43
  from 'C:\wamp64\www\radioappointment\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67cf4bf3738d49_70788795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36440be06c0410b9ce23665e374084ee2c56a8a8' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\login.tpl',
      1 => 1741638627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cf4bf3738d49_70788795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192866872067cf4bf37371d5_90589258', "contenu");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_192866872067cf4bf37371d5_90589258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_192866872067cf4bf37371d5_90589258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Login Page</h1>
    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">


        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <p>
            me911khan@gmail.com </br>
            Sqaan@444$hello124578
        </p>

        <input type="submit" value="Connexion">
    </form>
<?php
}
}
/* {/block "contenu"} */
}
