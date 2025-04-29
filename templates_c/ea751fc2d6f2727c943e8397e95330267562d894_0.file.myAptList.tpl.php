<?php
/* Smarty version 4.3.4, created on 2025-04-29 20:10:46
  from 'C:\wamp64\www\radioappointment\views\myAptList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681132468e8904_21063449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea751fc2d6f2727c943e8397e95330267562d894' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\myAptList.tpl',
      1 => 1745957171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/apt.tpl' => 1,
  ),
),false)) {
function content_681132468e8904_21063449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1348371161681132468e08c6_12863058', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1348371161681132468e08c6_12863058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1348371161681132468e08c6_12863058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\radioappointment\\libs\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>





    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Mes RDV</h1> 
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['arrAptToDisplay']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrAptToDisplay']->value, 'objApt');
$_smarty_tpl->tpl_vars['objApt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objApt']->value) {
$_smarty_tpl->tpl_vars['objApt']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("file:views/apt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        <?php } else { ?>
            <p>Aucun rendez-vous trouvé.</p>
        <?php }?>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
