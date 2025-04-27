<?php
/* Smarty version 4.3.4, created on 2025-04-27 18:32:26
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680e783a20fd95_13000688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1745778744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680e783a20fd95_13000688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273615171680e783a20f2a6_06270516', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1273615171680e783a20f2a6_06270516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1273615171680e783a20f2a6_06270516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="max-w-lg mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">

        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">HomePage</h1>
        <form action="" method="post" class="space-y-6">

            <select
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                <option>MRI</option>
                <option>CT Scan</option>
                <option>X-Ray</option>
                <option>Dental X-ray</option>
                <option>Angiography</option>
            </select>
            <select
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                <option>Corresponding test 1</option>
                <option>Corresponding test 2</option>
                <option>Corresponding test 3</option>
                <option>Corresponding test 4</option>
                <option>Corresponding test 5</option>
                <option>Corresponding test 6</option>
                <option>Corresponding test 7</option>
                <option>Corresponding test 8</option>
            </select>

            <select
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                <option>Jan</option>
                <option>Feb</option>
                <option>Mar</option>
                <option>Avr</option>
                <option>May</option>
                <option>Jun</option>
                <option>Jul</option>
                <option>Aug</option>
                <option>Sep</option>
                <option>Oct</option>
                <option>Nov</option>
                <option>Dec</option>
            </select>

            <select
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                    
                <option>Time 1 </option>
                <option>Time 2 </option>
                <option>Time 3 </option>
                <option>Time 4 </option>
                <option>Time 5 </option>
                <option>Time 1 </option>
                <option>Time 6 </option>
                <option>Time 7 </option>
                <option>Time 7 </option>
            </select>
            <div class="max-w-auto mx-auto">
            <input type="submit" value="Enregistrer"
                class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
        </div>
        </form>

    </div>
    
<?php
}
}
/* {/block "contenu"} */
}
