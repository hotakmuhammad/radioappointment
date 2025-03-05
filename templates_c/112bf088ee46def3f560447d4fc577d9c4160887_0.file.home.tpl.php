<?php
/* Smarty version 4.3.4, created on 2025-03-05 19:53:15
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67c8abab3eebd7_64498968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1741204394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/appointment.tpl' => 1,
  ),
),false)) {
function content_67c8abab3eebd7_64498968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127580027667c8abab3ec9f0_50382496', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_127580027667c8abab3ec9f0_50382496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_127580027667c8abab3ec9f0_50382496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <?php $_smarty_tpl->_subTemplateRender("file:views/appointment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php
}
}
/* {/block "contenu"} */
}
