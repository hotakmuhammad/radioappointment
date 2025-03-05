<?php
/* Smarty version 4.3.4, created on 2025-03-05 20:14:50
  from 'C:\wamp64\www\radioappointment\views\appointment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67c8b0ba87dd50_67216772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c7d06f9f18a019297922be03260864f1251b6f0' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\appointment.tpl',
      1 => 1741205688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/header.tpl' => 1,
  ),
),false)) {
function content_67c8b0ba87dd50_67216772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144149437267c8b0ba876f15_50388287', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_144149437267c8b0ba876f15_50388287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_144149437267c8b0ba876f15_50388287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login">Login</a>
    <h1>Appoitment / index Page</h1>
<?php
}
}
/* {/block "contenu"} */
}
