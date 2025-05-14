<?php
/* Smarty version 4.3.4, created on 2025-05-14 09:12:40
  from 'C:\wamp64\www\radioappointment\views\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68245e88045105_82536793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd814314e2bb7ac5f34286e7f58402555a0b979b5' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\manage.tpl',
      1 => 1747213958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/users_list.tpl' => 1,
  ),
),false)) {
function content_68245e88045105_82536793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144535946168245e88043907_09015321', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_144535946168245e88043907_09015321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_144535946168245e88043907_09015321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container mx-auto p-4">

        <div id="userList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            <?php $_smarty_tpl->_subTemplateRender("file:views/users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>


    </div>

<?php
}
}
/* {/block "contenu"} */
}
