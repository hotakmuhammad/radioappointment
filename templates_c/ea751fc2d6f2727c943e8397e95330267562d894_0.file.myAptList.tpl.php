<?php
/* Smarty version 4.3.4, created on 2025-04-28 20:31:26
  from 'C:\wamp64\www\radioappointment\views\myAptList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680fe59ed983e6_77704062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea751fc2d6f2727c943e8397e95330267562d894' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\myAptList.tpl',
      1 => 1745872284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/apt.tpl' => 1,
  ),
),false)) {
function content_680fe59ed983e6_77704062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237915458680fe59ed93569_36010803', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_237915458680fe59ed93569_36010803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_237915458680fe59ed93569_36010803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Mes RDV</h1>

        <?php $_smarty_tpl->_subTemplateRender("file:views/apt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
