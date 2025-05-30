 
{block name="js_head_users_list"}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>

    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script> 
    <link href="./assets/style/output.css" rel="stylesheet">
    
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Liste de rendez-vous</h2>
        <hr class="border-gray-300 mb-6">

 
        {* <div class="container mx-auto p-4"> *}
        <table id="aptTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="py-3 px-4 font-semibold text-sm">Id</th>
                    <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Rendez-vous</th>
                    <th class="py-3 px-4 font-semibold text-sm">Date</th>
                    <th class="py-3 px-4 font-semibold text-sm">Heure</th>
                    <th class="py-3 px-4 font-semibold text-sm">Statut</th>
                <th class="py-3 px-4 font-semibold text-sm">Action</th>
            </tr>
        </thead>
        <tbody>

        {foreach $arrAptToDisplay as $objApt}
            <tr class="border-b hover:bg-gray-50">
                <td class="py-3 px-4 text-gray-600">{$objApt->getId()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getUserName()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getUserFirstName()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getAppointment()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getDate()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getTime()}</td>
                <td class="py-3 px-4 text-gray-600">{$objApt->getStatus()}</td>
                        <td class="py-3 px-4 ">
                            <a
                                href="{$base_url}appointment/delete_apt?id={$objApt->getId()}" class="">
                                <i class="hover:text-red-600 text-red-400 fa-solid fa-trash"></i>
                            </a>
                        </td>
            </tr>

            {/foreach}
        </tbody>
    </table>


</div> 

 
{/block}
{block name="js_footer"}
    {literal}
        <script>
            var table = new DataTable('#aptTable', {
                layout: {
                    topStart: {
                        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']
                    }
                },
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json'
                }
            });
        </script>
    {/literal}
{/block}