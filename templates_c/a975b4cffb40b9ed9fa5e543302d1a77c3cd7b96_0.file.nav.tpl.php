<?php
/* Smarty version 4.3.4, created on 2025-04-13 15:39:45
  from 'C:\wamp64\www\radioappointment\views\_partiel\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fbdac1e519f0_98398867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a975b4cffb40b9ed9fa5e543302d1a77c3cd7b96' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\nav.tpl',
      1 => 1744558780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fbdac1e519f0_98398867 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="bg-gray-900">
    <nav class="mainNav flex items-center justify-between max-w-7xl mx-auto px-4 py-4 container mx-auto">
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200"
                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><i class="fa-solid fa-house text-xl"></i></a>
        </div>

        
        <div class="navbarItems flex items-center gap-4">
            <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != '') {?>
                <div>
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/appointment">Mes rendez-vous</a>
                </div>

                <div class="text-white">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors  duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about">
                        <p class="text-xl">A propos</p>
                    </a>


                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'admin') {?>
                    <div>
                        <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                            href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/manage">Menage</i></a>
                    </div>
                <?php }?>

                <div>
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/logout"><i class="fa-solid fa-right-from-bracket text-xl"></i></a>
                </div>

                <div>
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
