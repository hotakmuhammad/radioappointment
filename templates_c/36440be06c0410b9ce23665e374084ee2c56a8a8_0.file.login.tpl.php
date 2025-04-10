<?php
/* Smarty version 4.3.4, created on 2025-04-10 12:21:19
  from 'C:\wamp64\www\radioappointment\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f7b7bf079ae9_82458659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36440be06c0410b9ce23665e374084ee2c56a8a8' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\login.tpl',
      1 => 1744287676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f7b7bf079ae9_82458659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66711631767f7b7bf074dc2_44938606', "contenu");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_66711631767f7b7bf074dc2_44938606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_66711631767f7b7bf074dc2_44938606',
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
                            <path d="M10 0a10 10 0 1 0 10 10A10 10 0 0 0 10 0zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-12h-2v6h2zm0 8h-2v2h2z"/>
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
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required
                >
            </div>

            <div class="max-w-md mx-auto">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required
                >
            </div>

            <div class="max-w-md mx-auto">
                <input 
                    type="submit" 
                    value="Connexion" 
                    class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer"
                >
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
