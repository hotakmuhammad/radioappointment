{extends file="views/layout.tpl"}

{block name="contenu"}
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
    
{/block}