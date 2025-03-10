<?php
/* Smarty version 4.3.4, created on 2025-03-10 20:28:33
  from 'C:\wamp64\www\radioappointment\views\_partiel\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67cf4b71896f36_12131261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10df641f2da7d1bf20b313dd677192e2d6248cb' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\header.tpl',
      1 => 1741638351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/_partiel/nav.tpl' => 1,
  ),
),false)) {
function content_67cf4b71896f36_12131261 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/projet_2/" />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    

    <title>Appointment</title>
    
</head>
<body>



</body>
<?php $_smarty_tpl->_subTemplateRender("file:views/_partiel/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
