{extends file="views/layout.tpl"}

{block name="contenu"}
    {if (count($arrErrors) > 0)}
        <div class="max-w-md mx-auto mt-4 p-4 bg-red-50 border border-red-200 rounded-lg shadow-sm">
            <ul class="space-y-2 text-red-700">
                {foreach from=$arrErrors item=strError}
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 0a10 10 0 1 0 10 10A10 10 0 0 0 10 0zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-12h-2v6h2zm0 8h-2v2h2z" />
                        </svg>
                        {$strError}
                    </li>
                {/foreach}
            </ul>
        </div> 
    {/if} 


    <section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Mes Informations personnelles</h1>

            <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
                <dl class="space-y-6">
                    <!-- Name -->
                    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                        <dt class="text-sm font-medium text-gray-600">Nom</dt>
                        <dd class="text-lg text-gray-900">{$objUser->getName()}</dd>
                    </div>
                    <!-- First Name -->
                    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                        <dt class="text-sm font-medium text-gray-600">Prénom</dt>
                        <dd class="text-lg text-gray-900">{$objUser->getFirstName()}</dd>
                    </div>
                    <!-- Phone -->
                    <div class="flex items-center justify-between border-b border-gray-200 pb-4">
                        <dt class="text-sm font-medium text-gray-600">Téléphone</dt>
                        <dd class="text-lg text-gray-900">{$objUser->getPhone()}</dd>
                    </div>
                    <!-- Email -->
                    <div class="flex items-center justify-between">
                        <dt class="text-sm font-medium text-gray-600">Email</dt>
                        <dd class="text-lg text-gray-900">{$objUser->getEmail()}</dd>
                    </div>
                </dl>
            </div>

    </div>
</section>
{/block}