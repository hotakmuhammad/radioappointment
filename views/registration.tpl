{extends file="views/layout.tpl"}

{* {include file="views/_partiel/header.tpl"} *}
{block name="contenu"}




    <div class="w-full max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">


        {if (count($arrErrors) > 0)}
            <div class="max-w-md mx-auto mt-4 p-4 m-5 bg-red-50 border border-red-200 rounded-lg shadow-sm">
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

        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Creation account Page</h1> 

        <form action="{$base_url}/user/registration" method="post" class="space-y-6">
            <h2 class="text-2xl font-medium text-gray-700 mb-4">Sign Up</h2>
            <p class="text-gray-600 mb-6">Please fill in this form to create an account.</p>
            <hr class="border-gray-300 mb-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2"><b>Nom</b></label>
                    <input type="text" placeholder="Nom" id="name" name="name" value="{$objUser->getName()}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2"><b>Prénom</b></label>
                    <input type="text" placeholder="Prénom" id="lastName" name="firstName"
                        value="{$objUser->getFirstName()}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" id="email" name="email" value="{$objUser->getEmail()}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2"><b>Phone</b></label>
                    <input type="text" placeholder="Enter Phone" id="phone" name="phone" value="{$objUser->getPhone()}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2"><b>Mot de passe</b></label>
                    <input type="password" placeholder="Enter Password" id="password" name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>

                <div>
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2"><b>Confirmez mot de
                            passe</b></label>
                    <input type="password" placeholder="Confirmation du mot de passe" id="confirmPassword"
                        name="confirmPassword"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200">
                </div>
            </div>

            <div class="max-w-auto mx-auto">
                <input type="submit" value="Créer un compte"
                    class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
            </div>
        </form>
            <div class="p-4 text-center item-center">
                <p>Si vous avez déjà un compte, connectez vous <a href="{$base_url}user/login" class="text-blue-600">ici</a></p>
            </div>
    </div>
{/block}