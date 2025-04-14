<?php
/* Smarty version 4.3.4, created on 2025-04-14 09:01:08
  from 'C:\wamp64\www\radioappointment\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fcced47360c5_41899928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f18e667f1df3f996496cd0ded28b6ec53dd60a' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\about.tpl',
      1 => 1744621266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fcced47360c5_41899928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66131307467fcced4735582_90613548', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_66131307467fcced4735582_90613548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_66131307467fcced4735582_90613548',
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
