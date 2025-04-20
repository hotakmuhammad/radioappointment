<?php
/* Smarty version 4.3.4, created on 2025-04-20 22:01:43
  from 'C:\wamp64\www\radioappointment\views\edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68056ec7dac952_51967069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf63fccabc3f7defa35c5cf23aa2f7f197717555' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\edit_user.tpl',
      1 => 1745186501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68056ec7dac952_51967069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94888346268056ec7d9fd32_23366361', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_94888346268056ec7d9fd32_23366361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_94888346268056ec7d9fd32_23366361',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10 10 0 0 0 10 0zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-12h-2v6h2zm0 8h-2v2h2z" />
                        </svg>
                        <?php echo $_smarty_tpl->tpl_vars['strError']->value;?>

                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Edit user's profile</h1>
    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Modification</h1>

        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_user" method="post" class="space-y-8">
            <fieldset class="space-y-6">
                <legend class="text-xl font-medium text-gray-700 border-b pb-2">Informations personnelles</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                        <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                    </div>
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                        <input type="text" name="firstName" id="firstName" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                    </div>
                    <div>
                        <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Roles</label>
                        <select name="role" id="role"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                            <option value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getRole();?>
">Select Role</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrRoles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['role']->value == $_smarty_tpl->tpl_vars['objUser']->value->getRole()) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                    </div>
                    <div>
                        <label for="isBanned" class="block text-sm font-medium text-gray-700 mb-2">Situation</label>
                        <select name="isBanned" id="isBanned"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                            <option value="0">---</option>
                                                        <option value="ISNOTBANNED" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getIsBanned() == 'ISNOTBANNED') {?>selected<?php }?>>NotBanned </option>
                            <option value="ISBANNED" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getIsBanned() == 'ISBANNED') {?>selected<?php }?>>Banned </option>
                                                    </select>
                    </div>
                                    </div>
            </fieldset>
            <div class="max-w-auto mx-auto">
            <input type="submit" value="Enregistrer"
                class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
        </div>
        </form>
    </div>


<?php
}
}
/* {/block "contenu"} */
}
