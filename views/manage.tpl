{extends file="views/layout.tpl"}


{block name="contenu"}

    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Users / appointment management</h1>
    <div>
        <input type="radio" name="listType" id="user" value="users" checked>
        <label for="user">User</label>
        <input type="radio" name="listType" id="apt" value="appointments">
        <label for="apt">Appointment</label>
    </div>

    <div id="userList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        {include file="views/users_list.tpl"}
    </div>

    <div id="aptList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        {include file="views/appointment_list.tpl"}
</div>

{/block}