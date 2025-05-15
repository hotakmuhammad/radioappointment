{extends file="views/layout.tpl"}

{block name="contenu"}
    <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
      {if count($arrErrors) > 0}
          <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
              <ul class="space-y-2 text-red-700">
                  {foreach from=$arrErrors item=strError}
                      <li class="flex items-center gap-2">{$strError}</li>
                  {/foreach}
              </ul>
          </div>
      {/if}

      <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Modify Your Appointment</h2>

      <form action="{$base_url}/appointment/edit_apt" method="post" class="space-y-6">
          <div class="form-group">
              <label for="exam">Exam:</label>
              <select
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                  id="exam_id" name="exam" required>
                  <option value="">Select an exam</option>
                {foreach from=$arrExams item=exam}
                    <option value="{$exam.exam_name}" {if $strExam == $exam.exam_name}selected{/if}>{$exam.exam_name}</option>
                {/foreach}
              </select>
          </div>

          <div class="form-group">
              <label for="test">Test:</label>
              <select
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                  id="test" name="test" required>
                  <option value="">Select a test</option>
               {foreach from=$arrTestsToDisplay item=test}
                    <option value="{$test.test_name}" {if $strTest == $test.test_name}selected{/if}>{$test.test_name}</option>
                {/foreach}
              </select>
          </div>

          <input type="text" id="datePicker" name="date" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
              placeholder="Select a date..." value="{$objApt->getDate()}">

          <input type="text" id="timePicker" name="time" required
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
              placeholder="Select a time..." value="{$objApt->getTime()}">

          <div class="max-w-auto mx-auto">
              <input type="submit" value="Save Changes"
                  class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
          </div>
      </form>
    </div>
  <script>
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
  </script>
{/block}