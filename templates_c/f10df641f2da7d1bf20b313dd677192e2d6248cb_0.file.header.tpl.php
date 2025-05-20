<?php
/* Smarty version 4.3.4, created on 2025-05-20 13:13:17
  from 'C:\wamp64\www\radioappointment\views\_partiel\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682c7fed0fe1d0_82782887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10df641f2da7d1bf20b313dd677192e2d6248cb' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\header.tpl',
      1 => 1747746796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/nav.tpl' => 1,
  ),
),false)) {
function content_682c7fed0fe1d0_82782887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/radioappointment/" />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link href="./assets/style/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>
    <title>RadioAppointment</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998022281682c7fed0fb644_40070581', "js_head_users_list");
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
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/script/script_global.js" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
<?php }
/* {block "js_head_users_list"} */
class Block_1998022281682c7fed0fb644_40070581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_1998022281682c7fed0fb644_40070581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
    <?php
}
}
/* {/block "js_head_users_list"} */
}
