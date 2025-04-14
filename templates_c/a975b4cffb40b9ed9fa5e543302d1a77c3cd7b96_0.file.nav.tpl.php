<?php
/* Smarty version 4.3.4, created on 2025-04-14 09:23:28
  from 'C:\wamp64\www\radioappointment\views\_partiel\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fcd41014e319_09214695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a975b4cffb40b9ed9fa5e543302d1a77c3cd7b96' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\nav.tpl',
      1 => 1744622606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fcd41014e319_09214695 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bg-gray-900">
    <nav class="mainNav flex items-center justify-between max-w-7xl mx-auto px-4 py-4 container mx-auto">
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200"
                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><i class="fa-solid fa-house text-xl"></i></a>
        </div>

                <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors  duration-200"
                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about">
                <p class="text-xl">A propos</p>
            </a>
        </div>
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors  duration-200"
                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about">
                <p class="text-xl">Service</p>
            </a>
        </div>
        <div class="navbarItems flex gap-4">
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != '') {?>
                <div class="navbarItems"> 
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/appointment">Mes rendez-vous</a>
                </div>
 
                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'admin') {?>
                    <div class="navbarItems">
                        <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                            href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/manage">Manage</i></a>
                    </div>
                <?php }?>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/logout"><i class="fa-solid fa-right-from-bracket text-xl"></i></a>
                </div>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile"><i class="fa-solid fa-pen-to-square text-xl"></i></a>
                </div>

            <?php } else { ?>
                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login">Login</a>
                </div>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/registration">Registration</a>
                </div>
            <?php }?>
        </div>
    </nav>
</div><?php }
}
