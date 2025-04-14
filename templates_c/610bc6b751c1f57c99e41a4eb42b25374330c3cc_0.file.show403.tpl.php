<?php
/* Smarty version 4.3.4, created on 2025-04-14 20:35:31
  from 'C:\wamp64\www\radioappointment\views\show403.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fd7193bdf0e8_02612788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610bc6b751c1f57c99e41a4eb42b25374330c3cc' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\show403.tpl',
      1 => 1744384816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fd7193bdf0e8_02612788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114466834967fd7193bddad0_26705135', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_114466834967fd7193bddad0_26705135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_114466834967fd7193bddad0_26705135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="min-h-screen  flex items-center justify-center px-4">
    <div class="max-w-md w-full text-center">
        <h1 class="text-6xl font-bold text-red-600 mb-4">403</h1>
        <h2 class="text-3xl font-semibold text-gray-800 mb-6">Access Denied!</h2>
        <p class="text-gray-600 mb-8">Looks like you tried to sneak into the VIP section of the galaxy. Sorry, but your clearance level is stuck at "Space Janitor".</p>
        <div class="relative mb-8">
            <div class="w-32 h-32 mx-auto animate-bounce">
                <svg class="w-full h-full text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <p class="mt-2 text-sm text-gray-500">Warning: Trespassers will be probed by aliens!</p>
        </div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="inline-block bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
            Beam Me Back Home
        </a>
    </div>
</div>
<?php
}
}
/* {/block "contenu"} */
}
