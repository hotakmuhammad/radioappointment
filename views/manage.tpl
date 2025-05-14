{extends file="views/layout.tpl"}


{block name="contenu"}

    <div class="container mx-auto p-4">

        <div id="userList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            {include file="views/users_list.tpl"}
        </div>


    </div>

{/block}