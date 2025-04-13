{extends file="views/layout.tpl"}


{block name="contenu"}

    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users / appointment management</h1>
    <div>
        <input type="radio" name="listType" id="user" value="users" checked>
        <label for="user">User</label>
        <input type="radio" name="listType" id="apt" value="appointments">
        <label for="apt">Aappointment</label>
    </div>
    <div class="usersList w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        {include file="views/users_list.tpl"}
    </div>
    <div class="aptList w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        {include file="views/appointment_list.tpl"}
    </div>
    {* <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
    
    </div> *}
    <script src="{$base_url}assets/script/script_global.js"></script>
{/block}