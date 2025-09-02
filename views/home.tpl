{extends file="views/layout.tpl"}

{block name="contenu"}
  {if !isset($user.user_id) || $user.user_id == ''}
    <div class="max-w-2xl mx-auto text-center m-6 p-6 bg-white rounded-2xl shadow-md">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">
        Pour prendre un rendez-vous
      </h2>
      <p class="text-gray-600 mb-6">
        Veuillez
        <a href="{$base_url}user/registration" class="font-medium hover:underline">
          créer un compte
        </a>
        ou vous connecter avec votre
        <a href="{$base_url}user/login" class="font-medium hover:underline">
          compte personnel
        </a>.
      </p>
      <div class="flex justify-center space-x-4">
        <a href="{$base_url}user/registration"
          class="px-6 py-2 bg-gray-100 text-gray-800  rounded-xl shadow hover:bg-gray-200 transition">
          Créer un compte
        </a>
        <a href="{$base_url}user/login"
          class="px-6 py-2 bg-gray-100 text-gray-800 rounded-xl shadow hover:bg-gray-200 transition">
          Connexion
        </a>
      </div>
    </div>
  {/if}
  {if isset($user.user_id) && $user.user_id != ''} 
  <div class="mt-28 mb-28 max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
    <h2 class="text-3xl font-semibold text-gray-800 mb-4">
      Prenez un rendez-vous
    </h2>  
    {if (count($arrErrors) > 0)} 
      <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
        <ul class="space-y-2 text-red-700">
          {foreach from=$arrErrors item=strError}
            <li class="flex items-center gap-2">
              {$strError}
            </li>
          {/foreach}
        </ul>
      </div>
    {/if}

    
      <form action="{$base_url}" method="post" class="space-y-6">
        <div class="form-group">
          <label for="exam">Service :</label>
          <select
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
            id="exam_id" name="exam">
            <option value="">Sélectionnez un service</option>
            {foreach from=$arrExams item=exam}
              <option name="exam" value="{$exam.exam_name}" {if $strExam == $exam.exam_name}selected{/if}>{$exam.exam_name}
              </option>
            {/foreach}
          </select>
        </div>

        <div class="form-group">
          <label for="test">Exam :</label>
          <select
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
            id="test" name="test">
            <option value="">Sélectionnez un examen</option>

            {foreach from=$arrTestsToDisplay item=test}
              <option name="test" value="{$test.test_name}" {if $strTest == $test.test_name}selected{/if}>{$test.test_name}
              </option>
            {/foreach}
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
    </div>
  {/if}
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