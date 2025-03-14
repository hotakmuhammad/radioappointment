<?php
/* Smarty version 4.3.4, created on 2025-03-14 14:59:58
  from 'C:\wamp64\www\radioappointment\views\show404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d4446e68d477_83118081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdc864839d305647f80fb856ef502bf874f7a0b' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\show404.tpl',
      1 => 1741964397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d4446e68d477_83118081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67969426167d4446e68c860_76565649', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_67969426167d4446e68c860_76565649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_67969426167d4446e68c860_76565649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>ERROR 404</h1>
<?php
}
}
/* {/block "contenu"} */
}
