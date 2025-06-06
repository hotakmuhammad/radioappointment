<?php
/* Smarty version 4.3.4, created on 2025-06-01 19:59:15
  from 'C:\wamp64\www\radioappointment\views\appointment_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_683cb113de32e6_01091449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48a95b6c92bc4af76d0c630f43bb2785b6c0c79e' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\appointment_list.tpl',
      1 => 1748640426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683cb113de32e6_01091449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_549876929683cb113da61f4_53550726', "js_head_users_list");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1340299245683cb113dde245_50447827', "js_footer");
}
/* {block "js_head_users_list"} */
class Block_549876929683cb113da61f4_53550726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_head_users_list' => 
  array (
    0 => 'Block_549876929683cb113da61f4_53550726',
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
    <link href="./assets/style/output.css" rel="stylesheet">
    
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Liste de rendez-vous</h2>
        <hr class="border-gray-300 mb-6">

        <table id="aptTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="py-3 px-4 font-semibold text-sm">Id</th>
                    <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Rendez-vous</th>
                    <th class="py-3 px-4 font-semibold text-sm">Date</th>
                    <th class="py-3 px-4 font-semibold text-sm">Heure</th>
                    <th class="py-3 px-4 font-semibold text-sm">Statut</th>
                <th class="py-3 px-4 font-semibold text-sm">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrAptToDisplay']->value, 'objApt');
$_smarty_tpl->tpl_vars['objApt']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objApt']->value) {
$_smarty_tpl->tpl_vars['objApt']->do_else = false;
?>
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getId();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getUserName();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getUserFirstName();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getAppointment();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getDate();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getTime();?>
</td>
                <td class="py-3 px-4 text-gray-600"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getStatus();?>
</td>
                        <td class="py-3 px-4 ">
                            <a
                                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/delete_apt?id=<?php echo $_smarty_tpl->tpl_vars['objApt']->value->getId();?>
" class="">
                                <i class="hover:text-red-600 text-red-400 fa-solid fa-trash"></i>
                            </a>
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
class Block_1340299245683cb113dde245_50447827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_footer' => 
  array (
    0 => 'Block_1340299245683cb113dde245_50447827',
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
