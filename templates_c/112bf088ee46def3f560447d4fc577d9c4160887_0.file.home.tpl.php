<?php
/* Smarty version 4.3.4, created on 2025-05-30 20:52:29
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_683a1a8dabba68_79787333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1748638303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_683a1a8dabba68_79787333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1177040880683a1a8da6d319_69975627', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1177040880683a1a8da6d319_69975627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1177040880683a1a8da6d319_69975627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class="mt-28 mb-28 max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


    <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>
      <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
        <ul class="space-y-2 text-red-700">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>
            <li class="flex items-center gap-2">
              <?php echo $_smarty_tpl->tpl_vars['strError']->value;?>

            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    <?php }?>
    <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Pour prendre un rendez vous veuillez créer un compte
      utilisiteur</h2>

    <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" method="post" class="space-y-6">
      <div class="form-group">
        <label for="exam">Service :</label>
        <select
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
          id="exam_id" name="exam">
          <option value="">Sélectionnez un service</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrExams']->value, 'exam');
$_smarty_tpl->tpl_vars['exam']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->do_else = false;
?>
            <option name="exam" value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['exam_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['strExam']->value == $_smarty_tpl->tpl_vars['exam']->value['exam_name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['exam']->value['exam_name'];?>

            </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>


      <!-- Test dropdown -->
      <div class="form-group">
        <label for="test">Exam :</label>
        <select
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
          id="test" name="test">
          <option value="">Sélectionnez un examen</option>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrTestsToDisplay']->value, 'test');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
            <option name="test" value="<?php echo $_smarty_tpl->tpl_vars['test']->value['test_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['strTest']->value == $_smarty_tpl->tpl_vars['test']->value['test_name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['test']->value['test_name'];?>

            </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <input type="text" id="datePicker" name="date"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
        placeholder="Sélectionner une date..." value="">

      <input type="text" id="timePicker" name="time"
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
        placeholder="Sélectionner une heure..." value="">
      <div class="max-w-auto mx-auto">
        <input type="submit" value="Enregistrer" name="log"
          class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
      </div>
    </form>
    <div>
    </div>

  </div>
  <?php echo '<script'; ?>
>
    flatpickr("#datePicker", {
      minDate: "today",
      disable: [
        function(date) {
          return date.getDay() === 0;
        }
      ],
      dateFormat: "Y-m-d"
    });
    flatpickr("#timePicker", {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      time_24hr: true,
      minuteIncrement: 30,
      minTime: "09:00",
      maxTime: "17:00",
      onOpen: function(selectedDates, dateStr, instance) {

        instance.config.enable = [
          function(date) {
            const hours = date.getHours();
            const minutes = date.getMinutes();
            return (hours >= 9 && hours < 12 || hours >= 13 && hours <= 17) && (minutes % 30 === 0);
          }
        ];
      },
      onChange: function(selectedDates, dateStr, instance) {

        if (selectedDates.length > 0) {
          const selectedTime = selectedDates[0];
          const hours = selectedTime.getHours();
          if (hours === 12) {
            alert("This time is unavailable due to a lunch break (12:00–13:00). Please select another time.");

            instance.setDate("09:00", true);
          }
        }
      }
    }); 
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "contenu"} */
}
