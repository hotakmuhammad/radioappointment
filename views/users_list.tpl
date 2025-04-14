{* <div class="container mx-auto p-4">
    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users List</h1>

</div>
 *}
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


        <div class="container mx-auto p-4">
            <table id="usersTable" class="w-full border-collapse bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-left">
                        <th class="py-3 px-4 font-semibold text-sm">Id</th>
                        <th class="py-3 px-4 font-semibold text-sm">Nom</th>
                        <th class="py-3 px-4 font-semibold text-sm">Prénom</th>
                        <th class="py-3 px-4 font-semibold text-sm">Email</th>
                        <th class="py-3 px-4 font-semibold text-sm">Phone</th>
                        {* <th class="py-3 px-4 font-semibold text-sm">Role</th> *}
                        <th class="py-3 px-4 font-semibold text-sm">Date d'inscription</th>
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
                    <td class="py-3 px-4 text-gray-600">{$objUser->getPhone()}</td>
                    {* <td class="py-3 px-4 text-gray-600">{$objUser->getr}</td> *}
                    <td class="py-3 px-4 text-gray-600">{$objUser->getRegist_date()}</td>
                    <td class="py-3 px-4 ">
                        <button class="editButtonPopu" onclick="openEditPopup()">
                            <i class="hover:text-blue-600 text-blue-400 fa-solid fa-pen-to-square"></i>
                        </button> /
                        <a class="deleteButtonPopup" data-user-id="{$objUser->getId()}" onclick="openDeletePopup(this)">
                            <i class="hover:text-red-600 text-red-400 fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
<div id="editPopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-xl font-bold mb-4">Edit User</h2>
        <form id="editUserForm">
            <input type="hidden" id="userId">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name</label>
                <input type="text" id="name" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">First Name</label>
                <input type="text" id="firstName" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                <input type="email" id="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                <input type="text" id="phone" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">isEnabled</label>
                <select type="option" id="isEnabled" class="w-full p-2 border rounded">
                    <option>Enable</option>
                    <option>Ban</option>
                </select>
            </div>
            <div class="flex justify-end space-x-2">
                <div type="button" onclick="closeEditPopup()"
                    class="cursor-pointer bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                    Cancel
                </div>
                <input type="submit"
                    class="cursor-pointer bg-gray-600 text-white rounded-lg hover:bg-gray-700 px-4 py-2 ">

            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Popup -->
{foreach $arrUsersToDisplay as $objUser}
<div id="deletePopup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Confirm Deletion</h2>
        <p class="mb-4 text-gray-600">Are you
            sure you want to delete this user?</p>
        <div class="flex justify-end space-x-2">
            <button

            onclick="closeDeletePopup()" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
                Cancel
            </button>
            <a 
                id="confirmDeleteLink"
                onclick="confirmDelete()" 
                href="{$base_url}user/delete?id={$objUser->getId()}" class="bg-red-400 text-white px-4 py-2 rounded-lg hover:bg-red-600">
                Delete
            </a>
        </div>
    </div>
</div>
{/foreach}
<!-- Popup container -->
<script src="{$base_url}assets/script/script_global.js"></script>

{/block}

<script>
    var table = new DataTable('#usersTable', {
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