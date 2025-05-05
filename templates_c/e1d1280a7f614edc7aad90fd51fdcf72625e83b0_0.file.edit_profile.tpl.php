<?php
/* Smarty version 4.3.4, created on 2025-05-05 10:28:51
  from 'C:\wamp64\www\radioappointment\views\edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681892e3de8da5_59048293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d1280a7f614edc7aad90fd51fdcf72625e83b0' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\edit_profile.tpl',
      1 => 1746440930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681892e3de8da5_59048293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863191787681892e3dd4851_84689788', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1863191787681892e3dd4851_84689788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1863191787681892e3dd4851_84689788',
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

    <main class="container mx-auto">
        <section class="">
            <div class="container mx-auto px-4">

                <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
                    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
                        <?php if ($_smarty_tpl->tpl_vars['isOwnProfile']->value) {?>Mon profil<?php } else { ?>Profil de <?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();
}?></h1>
                            <div class="flex justify-center">
                                <img class="w-32 h-32 rounded-full mx-auto m-4 object-cover"
                                    src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/uploads/profil_pic_default.png"
                                    alt="Avatar de <?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
" />                                                        
                            </div>
                    <dl class="space-y-6">
                        <!-- Name -->
                        <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                            <dt class="text-sm font-medium text-gray-600">Nom</dt>
                            <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</dd>
                        </div>
                        <!-- First Name -->
                        <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                            <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                            <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
</dd>
                        </div>
                        <!-- Phone -->
                        <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                            <dt class="text-sm font-medium text-gray-600">Téléphone</dt>
                            <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
</dd>
                        </div>
                        <!-- Email -->
                        <div class="flex items-center justify-between">
                            <dt class="text-sm font-medium text-gray-600">Email</dt>
                            <dd  class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
</dd>
                        </div>
                    </dl>
                </div>

            </div>
        </section>
        <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Modification</h1>

            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile<?php if (!$_smarty_tpl->tpl_vars['isOwnProfile']->value) {?>?id=<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();
}?>" method="POST" class="space-y-8">
            <fieldset class="space-y-6">
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != '') {?>
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
                            <input <?php if (!$_smarty_tpl->tpl_vars['isOwnProfile']->value) {?>disabled<?php }?> type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        
                        <?php if ($_smarty_tpl->tpl_vars['isAdminOrSuperAdmin']->value) {?>
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Roles</label>
                                <select name="role" id="role"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                                    <option value="USER" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getRole() == "USER") {?>selected<?php }?>  >USER</option>
                                    <option value="ADMIN" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getRole() == "ADMIN") {?>selected<?php }?> >ADMIN</option>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'SUPERADMIN') {?>
                                        <option value="SUPERADMIN" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getRole() == 'SUPERADMIN') {?> selected <?php }?>>SUPERADMIN</option>
                                    <?php }?>
    
                                </select>
                            </div>
                            <div>
                                <label for="isBanned" >Situation</label>
                                <select name="isBanned" id="isBanned"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                                    <option value="ISNOTBANNED" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getIsBanned() == 'ISNOTBANNED') {?>selected<?php }?>>ISNOTBANNED</option>
                                    <option value="ISBANNED" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getIsBanned() == 'ISBANNED') {?>selected<?php }?> >ISBANNED</option>
    
                                </select>
                            </div>
                            <?php }?>
                                            </div>
                
                <?php }?>
                </fieldset>
                                <?php if ($_smarty_tpl->tpl_vars['isOwnProfile']->value) {?>
                <fieldset class="space-y-6">
                    <legend class="text-xl font-medium text-gray-700 border-b pb-2">Informations de connexion</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="oldPassword" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe
                                actuel</label>
                            <input type="password" name="oldPassword" id="oldPassword"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de
                                passe</label>
                            <input type="password" name="password" id="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">Confirmation
                                du mot de passe</label>
                            <input type="password" name="confirmPassword" id="confirmPassword"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                    </div>
                </fieldset>
            <?php }?>
                <div class="max-w-auto mx-auto">
                    <input type="submit" value="Enregistrer"
                        class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
                </div>
            </form>
        </div>
        <p>
            Sqaan@444$hello124578
            </br>
            Sqaan@444$hello1245
        </p>
    </main>
<?php
}
}
/* {/block "contenu"} */
}
