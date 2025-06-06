<?php
/* Smarty version 4.3.4, created on 2025-05-20 13:21:05
  from 'C:\wamp64\www\radioappointment\views\_partiel\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682c81c1afbd83_81109049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0ca486d7fea674ecff60830bbdb70fb487a771' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\footer.tpl',
      1 => 1747747264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682c81c1afbd83_81109049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
        </main>

        <footer class="bg-gray-800 text-white py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold">RadioAppointment</h3>
                    <p class="text-sm text-indigo-200">Simplifiez vos rendez-vous radiologiques.</p>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/mentions" class="text-sm hover:text-indigo-200">Mentions légales</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/contact" class="text-sm hover:text-indigo-200">Contact</a>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="text-sm hover:text-indigo-200 ">Retour à la page d'accueil</a>
                    <p class="text-sm text-indigo-200">&copy; 2025 RadioAppointment.</p>
                </div>
            </div>
        </footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22894669682c81c1afb2b6_77922143', "js_footer");
?>

        </body>

</html><?php }
/* {block "js_footer"} */
class Block_22894669682c81c1afb2b6_77922143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_footer' => 
  array (
    0 => 'Block_22894669682c81c1afb2b6_77922143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "js_footer"} */
}
