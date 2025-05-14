{extends file="views/layout.tpl"}


{block name="contenu"}

    <div class="container mx-auto p-4">

        <div id="aptList" class="list w-full max-w-7xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            {include file="views/appointment_list.tpl"}
        </div>


    </div>

{/block}