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

    <main class="container mx-auto">
        <section class="">
            <div class="container mx-auto px-4">

                <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
                    <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">
                        {if $isOwnProfile}Mon profil{else}Profil de {$objUser->getName()}{/if}</h1>
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
                            <dd  class="text-lg text-gray-900">{$objUser->getEmail()}</dd>
                        </div>
                    </dl>
                </div>

            </div>
        </section>
        <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
            <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Modification</h1>

            <form action="{$base_url}user/edit_profile{if !$isOwnProfile}?id={$objUser->getId()}{/if}" method="POST" class="space-y-8">
            <fieldset class="space-y-6">
            {if isset($user.user_id) && $user.user_id != ''}
                    <legend class="text-xl font-medium text-gray-700 border-b pb-2">Informations personnelles</legend>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                            <input type="text" name="name" id="name" value="{$objUser->getName()}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                            <input type="text" name="firstName" id="firstName" value="{$objUser->getFirstName()}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input {if !$isOwnProfile}disabled{/if} type="email" name="email" id="email" value="{$objUser->getEmail()}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                            <input type="tel" name="phone" id="phone" value="{$objUser->getPhone()}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        
                        {if $isAdminOrSuperAdmin}
                            <div>
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Roles</label>
                                <select name="role" id="role"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                                    <option value="USER" {if $objUser->getRole() == "USER"}selected{/if}  >USER</option>
                                    <option value="ADMIN" {if $objUser->getRole() == "ADMIN"}selected{/if} >ADMIN</option>
                                    {if $user.user_role == 'SUPERADMIN'}
                                        <option value="SUPERADMIN" {if $objUser->getRole() == 'SUPERADMIN'} selected {/if}>SUPERADMIN</option>
                                    {/if}
    
                                </select>
                            </div>
                            <div>
                                <label for="isBanned" >Situation</label>
                                <select name="isBanned" id="isBanned"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                                    <option value="ISNOTBANNED" {if $objUser->getIsBanned() == 'ISNOTBANNED'}selected{/if}>ISNOTBANNED</option>
                                    <option value="ISBANNED" {if $objUser->getIsBanned() == 'ISBANNED'}selected{/if} >ISBANNED</option>
    
                                </select>
                            </div>
                            {/if}
                        {* Uncomment and style if needed
                        <div>
                            <label for="pseudo" class="block text-sm font-medium text-gray-700 mb-2">Pseudo</label>
                            <input 
                                type="text" 
                                name="pseudo" 
                                id="pseudo" 
                                value="{if isset($smarty.cookies.pseudo)}{$smarty.cookies.pseudo}{/if}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                            >
                        </div>
                    *}
                    </div>
                
                {/if}
                </fieldset>
                {* Password fields only for logged-in user editing their own profile *}
                {if $isOwnProfile}
                <fieldset class="space-y-6">
                    <legend class="text-xl font-medium text-gray-700 border-b pb-2">Informations de connexion</legend>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="oldPassword" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe
                                actuel</label>
                            <input type="password" name="oldPassword" id="oldPassword"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de
                                passe</label>
                            <input type="password" name="password" id="password"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">Confirmation
                                du mot de passe</label>
                            <input type="password" name="confirmPassword" id="confirmPassword"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                        </div>
                    </div>
                </fieldset>
            {/if}
                <div class="max-w-auto mx-auto">
                    <input type="submit" value="Enregistrer"
                        class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
                </div>
            </form>
        </div>
        <p>
            Sqaan@444$hello124578
            </br>
            Sqaan@444$hello1245
        </p>
    </main>
{/block}