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
 
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users List</h2>
        <p class="text-gray-600 mb-6">List of users</p>
        <hr class="border-gray-300 mb-6">



        <table id="usersTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700 text-left">
                    <th class="py-3 px-4 font-semibold text-sm">Id</th>
                    <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                    <th class="py-3 px-4 font-semibold text-sm">Email</th>
                    <th class="py-3 px-4 font-semibold text-sm">Situation</th>
                    {if (isset($smarty.session.user.user_id) && $smarty.session.user.user_role == "SUPERADMIN" || $smarty.session.user.user_role == "ADMIN")}
                        <th class="py-3 px-4 font-semibold test-sm">Role</th>
                    {/if}

                    <th class="py-3 px-4 font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody>
                {foreach $arrUsersToDisplay as $objUser}
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 text-gray-600">{$objUser->getId()}</td>
                        <td class="py-3 px-4 text-gray-600">{$objUser->getName()}</td>
                        <td class="py-3 px-4 text-gray-600">{$objUser->getFirstName()}</td>
                        <td class="py-3 px-4 text-gray-600">{$objUser->getEmail()}</td>
                        <td class="isBanned py-3 px-4 text-gray-600">{$objUser->getIsBanned()}</td>
                        {if (isset($smarty.session.user.user_id) && $smarty.session.user.user_role == "SUPERADMIN" || $smarty.session.user.user_role == "ADMIN")}
                            <td class=" py-3 px-4 text-gray-600">{$objUser->getRole()}</td>
                        {/if}

                        <td class="py-3 px-4 ">
                            <a
                                href="{$base_url}user/edit_profile?id={$objUser->getId()}" class="">
                                <i class="hover:text-blue-600 text-blue-400 fa-solid fa-pen-to-square"></i>
                            </a> /
                            {if (isset($smarty.session.user.user_id) && $smarty.session.user.user_role == "SUPERADMIN" || $smarty.session.user.user_role == "ADMIN")}
                                <a
                                    href="{$base_url}user/delete?id={$objUser->getId()}" class="">
                                    <i class="hover:text-red-600 text-red-400 fa-solid fa-trash"></i>
                                </a>

                            {/if}
                        </td>
                    </tr>

                {/foreach}
            </tbody>
        </table>

    </div> 
    <script src="{$base_url}/assets/script/script_global.js"></script>

{/block}
{block name="js_footer"}
    {literal}
        <script>
            var table = new DataTable('#usersTable', {
                pageLength: 10,
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