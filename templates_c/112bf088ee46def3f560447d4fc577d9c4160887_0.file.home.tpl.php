<?php
/* Smarty version 4.3.4, created on 2025-03-09 21:27:09
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ce07ad6c83e1_51136646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1741555628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/header.tpl' => 1,
  ),
),false)) {
function content_67ce07ad6c83e1_51136646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63726772667ce07ad610702_74743569', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_63726772667ce07ad610702_74743569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_63726772667ce07ad610702_74743569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    
    <?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <h1>Accueil + Appointment</h1>
        
<?php
}
}
/* {/block "contenu"} */
}
