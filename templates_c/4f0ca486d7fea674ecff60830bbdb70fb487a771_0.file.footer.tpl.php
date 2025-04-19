<?php
/* Smarty version 4.3.4, created on 2025-04-19 20:25:10
  from 'C:\wamp64\www\radioappointment\views\_partiel\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680406a6739f87_48158449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0ca486d7fea674ecff60830bbdb70fb487a771' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\footer.tpl',
      1 => 1745094307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680406a6739f87_48158449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
        </main>

        <footer class="py-5 text-center text-body-secondary bg-body-tertiary">

            <p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/mentions">Mentions légales</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/contact">Contact</a>
            </p>
            <p class="mb-0">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Back to top</a>
            </p>
        </footer>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137226053680406a67381b5_32176069', "js_footer");
?>

    </body>

</html><?php }
/* {block "js_footer"} */
class Block_137226053680406a67381b5_32176069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js_footer' => 
  array (
    0 => 'Block_137226053680406a67381b5_32176069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block "js_footer"} */
}
