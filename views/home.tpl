{extends file="views/layout.tpl"}

{block name="contenu"}
    <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


    {if (count($arrErrors) > 0)}
      <div class="max-w-md mx-auto mt-4 p-4 m-5 bg-red-50 border border-red-200 rounded-lg shadow-sm">
          <ul class="space-y-2 text-red-700">
              {foreach from=$arrErrors item=strError}
                  <li class="flex items-center gap-2">
                      <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                          <path
                              d="M10 0a10 10 0 1 0 10 10A10 10 0 0 0 10 0zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-12h-2v6h2zm0 8h-2v2h2z" />
                      </svg>
                      {$strError}
                  </li>
              {/foreach}
          </ul>
      </div>
  {/if} 
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Pour prendre un rendez vous veuillez créer un compte utilisiteur</h1>
        {if isset($user.user_id) && $user.user_id != ''}
        <form action="{$base_url}" method="post" class="space-y-6">

            {* <select
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
                name="test_id"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">

            </select> *}
            <div class="form-group">
            <label for="exam_id">Exam:</label>
            <select class="form-select" id="exam_id" name="exam_id" onchange="this.form.submit()">
                <option value="">Select an exam</option>
                {foreach from=$arrExams item=exam}
                    <option value="{$exam.exam_id}" {if $intExamId eq $exam.exam_id}selected{/if}>
                        {$exam.exam_name|escape}
                    </option>
                {/foreach}
            </select>
        </div>
    
        <!-- Test dropdown -->
        <div class="form-group">
            <label for="test_id">Test:</label>
            <select class="form-select" id="test_id" name="test_id">
                <option value="">Select a test</option>
                {foreach from=$arrTests item=test}
                    <option value="{$test.test_id}">
                        {$test.test_name|escape}
                    </option>
                {/foreach}
            </select>
        </div>
            <input 
            
              type="text" id="datePicker"  name="apt_date"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                placeholder="Select a date..."
                {* value="{if isset($smarty.post.apt_date)}{$smarty.post.apt_date}{/if}" *}
                  >

                <input 
                    type="text" id="timePicker" name="apt_time"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    placeholder="Select a time..."
                    {* value="{if isset($smarty.post.apt_time)}{$smarty.post.apt_time}{/if}" *}
                      >
            <div class="max-w-auto mx-auto">
            <input type="submit" value="Enregistrer"
                class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
        </div>
        </form>
      {/if}
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
