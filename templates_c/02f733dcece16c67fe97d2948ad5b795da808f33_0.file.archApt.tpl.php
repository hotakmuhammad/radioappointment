<?php
/* Smarty version 4.3.4, created on 2025-05-14 07:57:54
  from 'C:\wamp64\www\radioappointment\views\archApt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68244d025c99e6_57820813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f733dcece16c67fe97d2948ad5b795da808f33' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\archApt.tpl',
      1 => 1747209472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68244d025c99e6_57820813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="mt-12">
    <div class="container mx-auto px-4"> 
        <div class="max-w-2xl mx-auto bg-white rounded-xl ">
                        <dl class="space-y-6 border-b border-gray-600 ">
                                    <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                        <dt class="text-sm font-medium text-gray-600">Nom</dt>
                        <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getUserName();?>
</dd>
                    </div>

                    <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                        <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                        <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getUserFirstname();?>
</dd>
                    </div>
                                <div class="flex items-center justify-between border-b border-gray-200 pb-1">
                    <dt class="text-sm font-medium text-gray-600">Appointment</dt>
                    <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getAppointment();?>
</dd>
                </div>

                <div class="flex items-center justify-between border-b border-gray-200 ">
                    <dt class="text-sm font-medium text-gray-600">Date</dt>
                    <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getDateFr();?>
</dd>
                </div>
                <div class="flex items-center justify-between border-b border-gray-200 ">
                    <dt class="text-sm font-medium text-gray-600">Time</dt>
                    <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getTime();?>
</dd>
                </div>

                <div class="flex mb-8 items-center justify-between">
                    <dt class="text-sm font-medium text-gray-600">Status</dt>
                    <dd class="text-lg text-gray-900"><?php echo $_smarty_tpl->tpl_vars['objApt']->value->getStatus();?>
</dd>
                </div>
                <div class="flex mb-8 items-center justify-between">
                    <dd class="text-lg text-red-900">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/delete_apt?id=<?php echo $_smarty_tpl->tpl_vars['objApt']->value->getId();?>
" class="inline-block px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700" style="background-color: #dc2626;">
                            Effacer
                        </a>
                    </dd>
                </div>
            </dl>
        </div>

    </div>
</section>
    
<?php }
}
