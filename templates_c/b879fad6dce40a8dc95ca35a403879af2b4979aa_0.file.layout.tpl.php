<?php
/* Smarty version 4.3.4, created on 2025-04-16 19:24:04
  from 'C:\wamp64\www\radioappointment\views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680003d4978513_80998163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b879fad6dce40a8dc95ca35a403879af2b4979aa' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\layout.tpl',
      1 => 1744831439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/header.tpl' => 1,
    'file:views/_partiel/footer.tpl' => 1,
  ),
),false)) {
function content_680003d4978513_80998163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:views/_partiel/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700405272680003d4976f07_44541554', "contenu");
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
/* {block "contenu"} */
class Block_1700405272680003d4976f07_44541554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1700405272680003d4976f07_44541554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<p>Hello</p>
	<?php
}
}
/* {/block "contenu"} */
}
