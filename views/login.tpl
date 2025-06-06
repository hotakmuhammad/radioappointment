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
    <div class="max-w-lg mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
        <h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Connexion</h1>

        <form action="{$base_url}user/login" method="post" class="space-y-6">
            <div class="max-w-md mx-auto">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email:</label>
                <input type="email" id="email" name="email" value="{$email}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required>
            </div>

            <div class="max-w-md mx-auto">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password:</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-colors duration-200"
                    required>
            </div>

            <div class="max-w-md mx-auto">
                <input type="submit" value="Connexion"
                    class="w-full px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 cursor-pointer">
            </div>
        </form>
            <div class="p-4">
                <p>Si vous n'avez pas un compte, vous pouvez en créer un <a href="{$base_url}user/registration" class="text-blue-700">ici</a></p>
            </div>
        </div>
    <div class="max-w-md  m-5 mx-auto">
    <table class="bg-gray-100 rounded-xl text-gray-700 text-left">
        <caption class="sr-only">User Credentials</caption>
        <thead>
            <tr>
                <th class="py-3 px-4 font-semibold text-sm" scope="col">Email</th>
                <th class="py-3 px-4 font-semibold text-sm" scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-3 px-4 text-gray-600">super@admin.web</td>
                <td class="py-3 px-4 text-gray-600">Super@123456$Admin</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">admin@admin.web</td>
                <td class="py-3 px-4 text-gray-600">Admin@123456$Admin</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">user@user.web</td>
                <td class="py-3 px-4 text-gray-600">User@123456$User</td>
            </tr>
            <tr>
                <td class="py-3 px-4 text-gray-600">banned@user.web</td>
                <td class="py-3 px-4 text-gray-600">Banned@123456$User</td>
            </tr>
        </tbody>
    </table>
</div>
{/block} 