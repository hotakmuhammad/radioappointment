<?php
/* Smarty version 4.3.4, created on 2025-04-16 19:31:52
  from 'C:\wamp64\www\radioappointment\views\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680005a879d8b5_37232041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd814314e2bb7ac5f34286e7f58402555a0b979b5' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\manage.tpl',
      1 => 1744831910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/users_list.tpl' => 1,
    'file:views/appointment_list.tpl' => 1,
  ),
),false)) {
function content_680005a879d8b5_37232041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_872104903680005a879b674_96076250', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_872104903680005a879b674_96076250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_872104903680005a879b674_96076250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users / appointment management</h1>
    <div>
        <input type="radio" name="listType" id="user" value="users" checked>
        <label for="user">User</label>
        <input type="radio" name="listType" id="apt" value="appointments">
        <label for="apt">Aappointment</label>
    </div>
    <div class="usersList w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <?php $_smarty_tpl->_subTemplateRender("file:views/users_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="aptList w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <?php $_smarty_tpl->_subTemplateRender("file:views/appointment_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
        <?php
}
}
/* {/block "contenu"} */
}
