<?php
/* Smarty version 4.3.4, created on 2025-03-10 21:02:52
  from 'C:\wamp64\www\radioappointment\views\_partiel\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67cf537cb057a4_94852847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a975b4cffb40b9ed9fa5e543302d1a77c3cd7b96' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\nav.tpl',
      1 => 1741640569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67cf537cb057a4_94852847 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">

	<nav class="mainNav flex">

		<div class="navbarItems m-5">
			<a class="buttonLink" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Accueil</a>
		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/registration">Registration</a>

		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login">Login</a>
		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/home">Take an appointment</a>
		</div>	

		<div class="navbarItems m-5 flex gap-4">
			<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != '') {?>

				<div class="">
					<a class="buttonLink" href="">Mes rendez-vous</a>
				</div>

				<div class="">
					<p>Bonjour</p>
					<?php echo $_SESSION['user']['first_name'];?>

				</div>
				<div class="">
					<a class="" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/logout"> se deconnecter </a>
				</div>
			<?php }?>
		</div>

	</nav>
</div><?php }
}
