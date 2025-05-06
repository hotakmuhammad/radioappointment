<?php
/* Smarty version 4.3.4, created on 2025-05-06 09:54:03
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6819dc3bea25f1_57321825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1746525038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6819dc3bea25f1_57321825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17272429166819dc3bea0d20_03389711', "contenu");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_17272429166819dc3bea0d20_03389711 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_17272429166819dc3bea0d20_03389711',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="max-w-lg mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">

        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">HomePage</h1>
        <form action="" method="post" class="space-y-6">

            <select
                id="services"
                name="services"
                class="selects w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                <option value="">Select a test</option>
                <option value="MRI">MRI</option>
                <option value="Ultrasound">Ultrasound</option>
                <option value="CT Scan">CT Scan</option>
                <option value="X-Ray">X-Ray</option>
                <option value="Blood Test">Blood Test</option>
                <option value="Dental X-ray">Dental X-ray</option>
                <option value="Angiography">Angiography</option>
            </select>
            <select
                id="subServices"
                name="subServices"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">

            </select>

            <input type="text" id="datePicker" 
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                placeholder="Select a date...">

                <input 
                     class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                type="text" id="timePicker" placeholder="Select a time...">
            <div class="max-w-auto mx-auto">
            <input type="submit" value="Enregistrer"
                class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
        </div>
        </form>

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
