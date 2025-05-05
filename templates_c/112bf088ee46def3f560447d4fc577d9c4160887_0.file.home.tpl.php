<?php
/* Smarty version 4.3.4, created on 2025-05-05 20:56:16
  from 'C:\wamp64\www\radioappointment\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_681925f0d6d951_13646175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '112bf088ee46def3f560447d4fc577d9c4160887' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\home.tpl',
      1 => 1746478572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681925f0d6d951_13646175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951102607681925f0d6bf72_26587981', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1951102607681925f0d6bf72_26587981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1951102607681925f0d6bf72_26587981',
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
      minDate: "today", // Restrict to today and future dates
      disable: [
        function(date) {
          // Disable Sundays (getDay() === 0)
          return date.getDay() === 0;
        }
      ],
      dateFormat: "Y-m-d" // Format as YYYY-MM-DD
    });
    // Time Picker: 9:00–17:00, 30-min intervals, exclude 12:00–13:00
    flatpickr("#timePicker", {
      enableTime: true, // Enable time picker
      noCalendar: true, // Disable date picker
      dateFormat: "H:i", // Format: HH:MM
      time_24hr: true, // Use 24-hour format
      minuteIncrement: 30, // 30-minute intervals
      minTime: "09:00", // Start at 9:00
      maxTime: "17:00", // End at 17:00
      onOpen: function(selectedDates, dateStr, instance) {
        // Dynamically enable times, excluding 12:00–13:00
        instance.config.enable = [
          function(date) {
            const hours = date.getHours();
            const minutes = date.getMinutes();
            // Enable times from 9:00–11:59 and 13:00–17:00, in 30-min intervals
            return (hours >= 9 && hours < 12 || hours >= 13 && hours <= 17) && (minutes % 30 === 0);
          }
        ];
      },
      onChange: function(selectedDates, dateStr, instance) {
        // Check if selected time is in the 12:00–13:00 range
        if (selectedDates.length > 0) {
          const selectedTime = selectedDates[0];
          const hours = selectedTime.getHours();
          if (hours === 12) {
            alert("This time is unavailable due to a lunch break (12:00–13:00). Please select another time.");
            // Set the time to 09:00
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
