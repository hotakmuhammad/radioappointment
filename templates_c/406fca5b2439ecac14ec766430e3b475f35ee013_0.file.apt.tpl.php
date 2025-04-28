<?php
/* Smarty version 4.3.4, created on 2025-04-28 21:31:22
  from 'C:\wamp64\www\radioappointment\views\apt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680ff3aab599f7_10413850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406fca5b2439ecac14ec766430e3b475f35ee013' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\apt.tpl',
      1 => 1745875879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680ff3aab599f7_10413850 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="">
<div class="container mx-auto px-4">

    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
            Appointments details</h1>
        <dl class="space-y-6">

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Nom</dt>
                <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName;?>
</dd>
            </div>

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                <dd class="text-lg text-gray-900">Muhammad Shahid</dd>
            </div>

            <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                <dt class="text-sm font-medium text-gray-600">Appointment</dt>
                <dd class="text-lg text-gray-900">HEAD MRI</dd>
            </div>

            <div class="flex items-center justify-between">
                <dt class="text-sm font-medium text-gray-600">Date</dt>
                <dd  class="text-lg text-gray-900">12/08/2025</dd>
            </div>
        </dl>
    </div>

</div>
</section>
<?php }
}
