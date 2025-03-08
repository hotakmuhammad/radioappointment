<?php
/* Smarty version 4.3.4, created on 2025-03-06 21:53:49
  from 'C:\wamp64\www\radioappointment\views\_partiel\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67ca196d0bdf21_45209081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a975b4cffb40b9ed9fa5e543302d1a77c3cd7b96' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\nav.tpl',
      1 => 1741246728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ca196d0bdf21_45209081 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">

	<nav class="">

		<a class="<?php if (($_smarty_tpl->tpl_vars['strPage']->value == "index")) {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Accueil</a>
		<a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/registration">Registration</a>
		<a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login">Login</a>
		<a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/home">Take an appointment</a>

	</nav>
</div><?php }
}
