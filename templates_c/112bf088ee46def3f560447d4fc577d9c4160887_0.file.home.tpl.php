<?php
/* Smarty version 4.3.4, created on 2025-05-08 16:15:52
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681cd8b8e449a5_53385730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1746720950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681cd8b8e449a5_53385730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1980894773681cd8b8e37716_87340427', "contenu");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1980894773681cd8b8e37716_87340427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1980894773681cd8b8e37716_87340427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


    <?php if ((count($_smarty_tpl->tpl_vars['arrErrors']->value) > 0)) {?>
      <div class="max-w-md mx-auto mt-4 p-4 m-5 bg-red-50 border border-red-200 rounded-lg shadow-sm">
          <ul class="space-y-2 text-red-700">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrErrors']->value, 'strError');
$_smarty_tpl->tpl_vars['strError']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['strError']->value) {
$_smarty_tpl->tpl_vars['strError']->do_else = false;
?>
                  <li class="flex items-center gap-2">
                      <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path
                              d="M10 0a10 10 0 1 0 10 10A10 10 0 0 0 10 0zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-12h-2v6h2zm0 8h-2v2h2z" />
                      </svg>
                      <?php echo $_smarty_tpl->tpl_vars['strError']->value;?>

                  </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
      </div>
  <?php }?> 
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Pour prendre un rendez vous veuillez créer un compte utilisiteur</h1>
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id'])) && $_smarty_tpl->tpl_vars['user']->value['user_id'] != '') {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" method="post" class="space-y-6">

                        <div class="form-group">
            <label for="exam_id">Exam:</label>
            <select class="form-select" id="exam_id" name="exam_id" onchange="this.form.submit()">
                <option value="">Select an exam</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrExams']->value, 'exam');
$_smarty_tpl->tpl_vars['exam']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['exam']->value) {
$_smarty_tpl->tpl_vars['exam']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['exam']->value['exam_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['intExamId']->value == $_smarty_tpl->tpl_vars['exam']->value['exam_id']) {?>selected<?php }?>>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['exam']->value['exam_name'], ENT_QUOTES, 'UTF-8', true);?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    
        <!-- Test dropdown -->
        <div class="form-group">
            <label for="test_id">Test:</label>
            <select class="form-select" id="test_id" name="test_id">
                <option value="">Select a test</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrTests']->value, 'test');
$_smarty_tpl->tpl_vars['test']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['test']->value['test_id'];?>
">
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['test']->value['test_name'], ENT_QUOTES, 'UTF-8', true);?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
            <input 
            
              type="text" id="datePicker"  name="apt_date"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                placeholder="Select a date..."
                                  >

                <input 
                    type="text" id="timePicker" name="apt_time"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    placeholder="Select a time..."
                                          >
            <div class="max-w-auto mx-auto">
            <input type="submit" value="Enregistrer"
                class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
        </div>
        </form>
      <?php }?>
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
