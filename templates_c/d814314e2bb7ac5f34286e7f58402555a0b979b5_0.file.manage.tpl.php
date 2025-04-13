<?php
/* Smarty version 4.3.4, created on 2025-04-13 17:03:41
  from 'C:\wamp64\www\radioappointment\views\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fbee6db9ac72_36099370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd814314e2bb7ac5f34286e7f58402555a0b979b5' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\manage.tpl',
      1 => 1744563820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/users_list.tpl' => 1,
    'file:views/appointment_list.tpl' => 1,
  ),
),false)) {
function content_67fbee6db9ac72_36099370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89396090667fbee6db975a4_03333376', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_89396090667fbee6db975a4_03333376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_89396090667fbee6db975a4_03333376',
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
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/script/script_global.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "contenu"} */
}
