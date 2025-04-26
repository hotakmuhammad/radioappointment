<?php
/* Smarty version 4.3.4, created on 2025-04-26 17:36:08
  from 'C:\wamp64\www\radioappointment\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680d1988e14296_72668528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36440be06c0410b9ce23665e374084ee2c56a8a8' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\login.tpl',
      1 => 1745688962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680d1988e14296_72668528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1419618102680d1988e0f096_93445848', "contenu");
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1419618102680d1988e0f096_93445848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1419618102680d1988e0f096_93445848',
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
    <div class="max-w-lg mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Login Page</h1>

        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" method="post" class="space-y-6">
            <div class="max-w-md mx-auto">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required>
            </div>

            <div class="max-w-md mx-auto">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required>
            </div>

            <div class="max-w-md mx-auto">
                <input type="submit" value="Connexion"
                    class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
            </div>
        </form>

    </div>
    <div class="max-w-md  m-5 mx-auto">
    <table class="bg-gray-100 rounded-xl text-gray-700 text-left">
        <caption class="sr-only">User Credentials</caption>
        <thead>
            <tr>
                <th class="py-3 px-4 font-semibold text-sm" scope="col">Email</th>
                <th class="py-3 px-4 font-semibold text-sm" scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-3 px-4 text-gray-600">super@admin.web</td>
                <td class="py-3 px-4 text-gray-600">Super@123456$Admin</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">admin@admin.web</td>
                <td class="py-3 px-4 text-gray-600">Admin@123456$Admin</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">user@user.web</td>
                <td class="py-3 px-4 text-gray-600">User@123456$User</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">banned@user.web</td>
                <td class="py-3 px-4 text-gray-600">Banned@123456$User</td>
            </tr>
        </tbody>
    </table>
</div>
<?php
}
}
/* {/block "contenu"} */
}
