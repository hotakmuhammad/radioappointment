<?php
/* Smarty version 4.3.4, created on 2025-04-10 12:17:56
  from 'C:\wamp64\www\radioappointment\views\show404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f7b6f410eb72_57028302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdc864839d305647f80fb856ef502bf874f7a0b' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\show404.tpl',
      1 => 1744287473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f7b6f410eb72_57028302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2334691767f7b6f410b615_86374711', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_2334691767f7b6f410b615_86374711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_2334691767f7b6f410b615_86374711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="max-w-md w-full text-center">
        <h1 class="text-6xl font-bold text-red-600 mb-4">404</h1>
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Page Not Found!</h2>
        <p class="text-gray-600 mb-8">Looks like this page took a wrong turn at the asteroid belt and got lost in the void. Our galactic GPS must be on the fritz!</p>
        <div class="relative mb-8">
            <div class="w-32 h-32 mx-auto animate-bounce">
                <svg class="w-full h-full text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <p class="mt-2 text-sm text-gray-500">Warning: Lost pages may attract space pirates!</p>
        </div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
            Beam Me Back Home
        </a>
    </div>
</div>
<?php
}
}
/* {/block "contenu"} */
}
