<?php
/* Smarty version 4.3.4, created on 2025-03-07 07:56:37
  from 'C:\wamp64\www\radioappointment\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67caa6b504db82_37049081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f18e667f1df3f996496cd0ded28b6ec53dd60a' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\about.tpl',
      1 => 1741294814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67caa6b504db82_37049081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99523460867caa6b504a4e3_27695231', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_99523460867caa6b504a4e3_27695231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_99523460867caa6b504a4e3_27695231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1>A propos</h1>
	<p>Notre site vous permet de prendre rendez-vous en ligne</p>
	<p>Vous pouvez consulter les disponibilités de nos praticiens et prendre rendez-vous en quelques clics</p>
	<p>Vous pouvez également consulter vos rendez-vous à venir et les annuler si besoin</p>
	<p>Notre site est sécurisé et vos données sont protégées</p>
<?php
}
}
/* {/block "contenu"} */
}
