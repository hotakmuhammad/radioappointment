<?php
/* Smarty version 4.3.4, created on 2025-03-06 21:53:46
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ca196aa2ce40_66350125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1741296192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ca196aa2ce40_66350125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64247397567ca196aa18a61_70234418', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_64247397567ca196aa18a61_70234418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_64247397567ca196aa18a61_70234418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/appointment">Prendre un rendez-vous</a></button>
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about">Page à propos</a></button>

    <h1>Accueil + Appointment</h1>
        
<?php
}
}
/* {/block "contenu"} */
}
