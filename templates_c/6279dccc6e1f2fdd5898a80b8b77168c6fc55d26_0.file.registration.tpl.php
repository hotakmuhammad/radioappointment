<?php
/* Smarty version 4.3.4, created on 2025-06-01 19:49:43
  from 'C:\wamp64\www\radioappointment\views\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_683caed73f1360_65229023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6279dccc6e1f2fdd5898a80b8b77168c6fc55d26' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\registration.tpl',
      1 => 1748807380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683caed73f1360_65229023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121040876683caed73e9e24_13192264', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_121040876683caed73e9e24_13192264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_121040876683caed73e9e24_13192264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


        <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>
            <div class="max-w-md mx-auto mt-4 p-4 m-5 bg-red-50 border border-red-200 rounded-lg shadow-sm">
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

        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Inscription</h1>

        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/user/registration" method="post" class="space-y-6">
            <p class="text-gray-600 mb-6">Veuillez completer le formulaire pour créer votre compte</p>
            <hr class="border-gray-300 mb-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2"><b>Nom</b></label>
                    <input type="text" placeholder="Nom" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2"><b>Prénom</b></label>
                    <input type="text" placeholder="Prénom" id="lastName" name="firstName"
                        value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2"><b>Phone</b></label>
                    <input type="text" placeholder="Enter Phone" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2"><b>Mot de passe</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2"><b>Confirmez mot de
                            passe</b></label>
                    <input type="password" placeholder="Confirmation du mot de passe" id="confirmPassword"
                        name="confirmPassword"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>
            </div>

            <div class="max-w-auto mx-auto">
                <input type="submit" value="Créer un compte"
                    class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
            </div>
        </form>
        <div class="p-4 text-center item-center">
            <p>Si vous avez déjà un compte, connectez vous <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" class="text-blue-700">ici</a></p>
        </div>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
