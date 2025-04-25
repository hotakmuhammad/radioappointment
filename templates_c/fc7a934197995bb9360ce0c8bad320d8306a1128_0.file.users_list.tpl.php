<?php
/* Smarty version 4.3.4, created on 2025-04-25 10:04:13
  from 'C:\wamp64\www\radioappointment\views\users_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680b5e1d017d09_01474124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc7a934197995bb9360ce0c8bad320d8306a1128' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\users_list.tpl',
      1 => 1745575443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680b5e1d017d09_01474124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1232917545680b5e1d003607_15562403', "js_head_users_list");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764934876680b5e1d017038_42731182', "js_footer");
}
/* {block "js_head_users_list"} */
class Block_1232917545680b5e1d003607_15562403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_1232917545680b5e1d003607_15562403',
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



        <table id="usersTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="py-3 px-4 font-semibold text-sm">Id</th>
                    <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Email</th>
                    <th class="py-3 px-4 font-semibold text-sm">Situation</th>
                    <?php if (((isset($_SESSION['user']['user_id'])) && $_SESSION['user']['user_role'] == "SUPERADMIN" || $_SESSION['user']['user_role'] == "ADMIN")) {?>
                        <th class="py-3 px-4 font-semibold test-sm">Role</th>
                    <?php }?>

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
                        <td class="isBanned py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getIsBanned();?>
</td>
                        <?php if (((isset($_SESSION['user']['user_id'])) && $_SESSION['user']['user_role'] == "SUPERADMIN" || $_SESSION['user']['user_role'] == "ADMIN")) {?>
                            <td class=" py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getRole();?>
</td>
                        <?php }?>

                        <td class="py-3 px-4 ">
                            <a
                                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile?id=<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
" class="">
                                <i class="hover:text-blue-600 text-blue-400 fa-solid fa-pen-to-square"></i>
                            </a> /
                            <?php if (((isset($_SESSION['user']['user_id'])) && $_SESSION['user']['user_role'] == "SUPERADMIN" || $_SESSION['user']['user_role'] == "ADMIN")) {?>
                                <a
                                    href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/delete?id=<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
" class="">
                                    <i class="hover:text-red-600 text-red-400 fa-solid fa-trash"></i>
                                </a>

                            <?php }?>
                        </td>
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

    </div> 


<?php
}
}
/* {/block "js_head_users_list"} */
/* {block "js_footer"} */
class Block_1764934876680b5e1d017038_42731182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_footer' => 
  array (
    0 => 'Block_1764934876680b5e1d017038_42731182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
        <?php echo '<script'; ?>
>
            var table = new DataTable('#usersTable', {
                pageLength: 10,
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
