<?php
/* Smarty version 4.3.4, created on 2025-04-10 09:19:05
  from 'C:\wamp64\www\radioappointment\views\_partiel\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67f78d092b55e7_92995821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10df641f2da7d1bf20b313dd677192e2d6248cb' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\header.tpl',
      1 => 1744276680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/nav.tpl' => 1,
  ),
),false)) {
function content_67f78d092b55e7_92995821 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/projet_2/" />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

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
</body> <?php }
}
