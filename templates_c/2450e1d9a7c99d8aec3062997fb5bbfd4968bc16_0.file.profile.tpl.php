<?php
/* Smarty version 4.3.4, created on 2025-04-11 15:09:28
  from 'C:\wamp64\www\radioappointment\views\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f930a85237a3_29205694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2450e1d9a7c99d8aec3062997fb5bbfd4968bc16' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\profile.tpl',
      1 => 1744384164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f930a85237a3_29205694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138920928967f930a851c564_48866888', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_138920928967f930a851c564_48866888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_138920928967f930a851c564_48866888',
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
                    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Mes Informations personnelles</h1>
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
                            <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
</dd>
                        </div>
                    </dl>
                </div>

            </div>
        </section>
    </main>
<?php
}
}
/* {/block "contenu"} */
}
