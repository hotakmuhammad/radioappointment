{extends file="views/layout.tpl"}

{block name="contenu"}
  <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


    {if (count($arrErrors) > 0)}
        <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
            <ul class="space-y-2 text-red-700">
                {foreach from=$arrErrors item=strError}
                    <li class="flex items-center gap-2">
                        {$strError}
                    </li>
                {/foreach}
            </ul>
        </div>
    {/if}

        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Remplacer votre RDV</h2>
{/block}