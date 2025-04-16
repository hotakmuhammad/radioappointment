<?php
/* Smarty version 4.3.4, created on 2025-04-16 19:24:04
  from 'C:\wamp64\www\radioappointment\views\_partiel\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680003d4a00575_12119997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10df641f2da7d1bf20b313dd677192e2d6248cb' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\header.tpl',
      1 => 1744831382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/nav.tpl' => 1,
  ),
),false)) {
function content_680003d4a00575_12119997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/projet_2/" />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1494358580680003d49f8a89_27143037', "js_head_users_list");
?>

        <title>Appointment</title>
    
</head>
<body>
    <header>
    <?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    
    <main class="container mx-auto">
    
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
<?php }
/* {block "js_head_users_list"} */
class Block_1494358580680003d49f8a89_27143037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_1494358580680003d49f8a89_27143037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
    <?php
}
}
/* {/block "js_head_users_list"} */
}
