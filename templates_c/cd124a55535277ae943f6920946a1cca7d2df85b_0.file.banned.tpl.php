<?php
/* Smarty version 4.3.4, created on 2025-04-18 20:37:25
  from 'C:\wamp64\www\radioappointment\views\banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6802b805c16d75_38235328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd124a55535277ae943f6920946a1cca7d2df85b' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\banned.tpl',
      1 => 1745008644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6802b805c16d75_38235328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21411981436802b805c13001_50376344', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_21411981436802b805c13001_50376344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_21411981436802b805c13001_50376344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full text-center">
            <h1 class="text-6xl font-bold text-red-600 mb-4">BANNED</h1>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Account Suspended!</h2>
            <p class="text-gray-600 mb-8">Your account has been banned from the galaxy. It seems you've caused a cosmic
                disturbance! Contact the admin to appeal your ban and get back to exploring the stars.</p>
            <div class="relative mb-8">
                <div class="w-32 h-32 mx-auto animate-bounce">
                    <svg class="w-full h-full text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <p class="mt-2 text-sm text-gray-500">Warning: Banned users are sent to the asteroid mines!</p>
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"
                class="inline-block bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                Return Home
            </a>
        </div>
    </div>
<?php
}
}
/* {/block "contenu"} */
}
