<?php
/* Smarty version 4.3.4, created on 2025-05-14 09:13:00
  from 'C:\wamp64\www\radioappointment\views\manageApt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68245e9c04afa2_93154746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693a085e4cd359b5260c82df39324c9e6fad64f7' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\manageApt.tpl',
      1 => 1747213979,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/appointment_list.tpl' => 1,
  ),
),false)) {
function content_68245e9c04afa2_93154746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82026940468245e9c048ed2_51782194', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_82026940468245e9c048ed2_51782194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_82026940468245e9c048ed2_51782194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container mx-auto p-4">

        <div id="aptList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            <?php $_smarty_tpl->_subTemplateRender("file:views/appointment_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>


    </div>

<?php
}
}
/* {/block "contenu"} */
}
