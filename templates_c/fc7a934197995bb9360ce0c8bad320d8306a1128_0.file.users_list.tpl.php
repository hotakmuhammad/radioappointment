<?php
/* Smarty version 4.3.4, created on 2025-04-14 08:43:27
  from 'C:\wamp64\www\radioappointment\views\users_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67fccaaf150107_74936165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7a934197995bb9360ce0c8bad320d8306a1128' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\users_list.tpl',
      1 => 1744620206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fccaaf150107_74936165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201901403267fccaaf147378_65103073', "js_head_users_list");
?>


<?php echo '<script'; ?>
>
    var table = new DataTable('#usersTable', {
        layout: {
            topStart: {
                buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
            }
        },
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
        }

    });

    function openEditPopup() {
        document.getElementById('editPopup').classList.remove('hidden');
    }

    function closeEditPopup() {
        document.getElementById('editPopup').classList.add('hidden');
    }

    function openDeletePopup() {
        document.getElementById('deletePopup').classList.remove('hidden');
    }

    function closeDeletePopup() {
        document.getElementById('deletePopup').classList.add('hidden');
    }

<?php echo '</script'; ?>
>
<?php }
/* {block "js_head_users_list"} */
class Block_201901403267fccaaf147378_65103073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_201901403267fccaaf147378_65103073',
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

    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users List</h2>
        <p class="text-gray-600 mb-6">List of users</p>
        <hr class="border-gray-300 mb-6">


        <div class="container mx-auto p-4">
            <table id="usersTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-left">
                        <th class="py-3 px-4 font-semibold text-sm">Id</th>
                        <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                        <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                        <th class="py-3 px-4 font-semibold text-sm">Email</th>
                        <th class="py-3 px-4 font-semibold text-sm">Phone</th>
                                                <th class="py-3 px-4 font-semibold text-sm">Date d'inscription</th>
                    <th class="py-3 px-4 font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrUsersToDisplay']->value, 'objUser');
$_smarty_tpl->tpl_vars['objUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objUser']->value) {
$_smarty_tpl->tpl_vars['objUser']->do_else = false;
?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
</td>
                    <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</td>
                    <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirstName();?>
</td>
                    <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
</td>
                    <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPhone();?>
</td>
                                        <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getRegist_date();?>
</td>
                    <td class="py-3 px-4 ">
                        <button class="editButtonPopu" onclick="openEditPopup()">
                            <i class="text-blue-400 fa-solid fa-pen-to-square"></i>
                        </button> /
                        <button class="deleteButtonPopup" onclick="openDeletePopup()">
                            <i class="text-red-400 fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
</div>
<div id="editPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>
        <form id="editUserForm">
            <input type="hidden" id="userId">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" id="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">First Name</label>
                <input type="text" id="firstName" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                <input type="text" id="phone" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">isEnabled</label>
                <select type="option" id="isEnabled" class="w-full p-2 border rounded">
                    <option>Enable</option>
                    <option>Ban</option>
                </select>
            </div>
            <div class="flex justify-end space-x-2">
                <div type="button" onclick="closeEditPopup()"
                    class="cursor-pointer bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Cancel
                </div>
                <input type="submit" class="cursor-pointer bg-gray-600 text-white rounded-lg hover:bg-gray-700 px-4 py-2 ">

            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Popup -->
<div id="deletePopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Confirm Deletion</h2>
            <p class="mb-4 text-gray-600">Are you
            sure you want to delete this user?</p>
            <div class="flex justify-end space-x-2">
                <button onclick="closeDeletePopup()" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                    Cancel
                </button>
                <button onclick="confirmDelete()" class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Delete
                </button>
            </div>
    </div>
</div>
<!-- Popup container -->


<?php
}
}
/* {/block "js_head_users_list"} */
}
