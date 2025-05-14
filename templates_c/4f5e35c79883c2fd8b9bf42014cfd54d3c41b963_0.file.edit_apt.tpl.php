<?php
/* Smarty version 4.3.4, created on 2025-05-14 08:48:50
  from 'C:\wamp64\www\radioappointment\views\edit_apt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682458f2e3a494_59842369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f5e35c79883c2fd8b9bf42014cfd54d3c41b963' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\edit_apt.tpl',
      1 => 1747212320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682458f2e3a494_59842369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1064009563682458f2a06e38_95622510', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1064009563682458f2a06e38_95622510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1064009563682458f2a06e38_95622510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


    <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>
        <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
            <ul class="space-y-2 text-red-700">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>
                    <li class="flex items-center gap-2">
                        <?php echo $_smarty_tpl->tpl_vars['strError']->value;?>

                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>

        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Remplacer votre RDV</h2>
<?php
}
}
/* {/block "contenu"} */
}
