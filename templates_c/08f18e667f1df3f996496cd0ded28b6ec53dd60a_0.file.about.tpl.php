<?php
/* Smarty version 4.3.4, created on 2025-04-13 14:41:50
  from 'C:\wamp64\www\radioappointment\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fbcd2e7c3b00_95994852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f18e667f1df3f996496cd0ded28b6ec53dd60a' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\about.tpl',
      1 => 1744555308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fbcd2e7c3b00_95994852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62827685367fbcd2e7c1236_02225921', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_62827685367fbcd2e7c1236_02225921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_62827685367fbcd2e7c1236_02225921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">About page</h1>
<?php
}
}
/* {/block "contenu"} */
}
