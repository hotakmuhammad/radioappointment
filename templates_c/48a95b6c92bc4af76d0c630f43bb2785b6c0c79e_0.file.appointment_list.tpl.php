<?php
/* Smarty version 4.3.4, created on 2025-04-22 19:50:50
  from 'C:\wamp64\www\radioappointment\views\appointment_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6807f31a637a78_40186006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48a95b6c92bc4af76d0c630f43bb2785b6c0c79e' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\appointment_list.tpl',
      1 => 1745351449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807f31a637a78_40186006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20804426236807f31a634487_33665177', "js_head_users_list");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2245000746807f31a636b55_85396863', "js_footer");
}
/* {block "js_head_users_list"} */
class Block_20804426236807f31a634487_33665177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_20804426236807f31a634487_33665177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css" />
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.7.1.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

    
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Appointment List</h2>
        <p class="text-gray-600 mb-6">List of users</p>
        <hr class="border-gray-300 mb-6">


                <table id="aptTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="py-3 px-4 font-semibold text-sm">Id</th>
                    <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Email</th>
                    <th class="py-3 px-4 font-semibold text-sm">Phone</th>
                    <th class="py-3 px-4 font-semibold text-sm">Role</th>
                    <th class="py-3 px-4 font-semibold text-sm">Date d'inscription</th>
                <th class="py-3 px-4 font-semibold text-sm">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-4 text-gray-600">1</td>
                <td class="py-3 px-4 text-gray-600">Doe</td>
                <td class="py-3 px-4 text-gray-600">John</td>
                <td class="py-3 px-4 text-gray-600">jhon@doe.com</td>
                <td class="py-3 px-4 text-gray-600">+33 6 12 34 56 78</td>
                <td class="py-3 px-4 text-gray-600">Admin</td>
                <td class="py-3 px-4 text-gray-600">2023-10-01</td>
                <td class="py-3 px-4 text-gray-600">Action</td>
            </tr>
        </tbody>
    </table>
    
</div>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/script/script_global.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "js_head_users_list"} */
/* {block "js_footer"} */
class Block_2245000746807f31a636b55_85396863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_footer' => 
  array (
    0 => 'Block_2245000746807f31a636b55_85396863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
        <?php echo '<script'; ?>
>
            var table = new DataTable('#aptTable', {
                layout: {
                    topStart: {
                        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                    }
                },
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                }
            });
        <?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block "js_footer"} */
}
