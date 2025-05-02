{extends file="views/layout.tpl"}

{block name="contenu"}


{* {include file="views/_partiel/header.tpl"} *}


{* <a class="" href="{$base_url}user/login">Login</a> *}
    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Mes RDV archivés</h1> 
        {if $arrAptToDisplay|@count > 0}
            {foreach from=$arrAptToDisplay item=objApt}
            {include file="views/archApt.tpl"}
        {/foreach} 
        {else}
            <p>Aucun rendez-vous trouvé.</p>
        {/if}
    </div>
{/block}