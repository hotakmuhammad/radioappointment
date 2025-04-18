<div class="bg-gray-900">
    <nav class="mainNav flex items-center justify-between max-w-7xl mx-auto px-4 py-4 container mx-auto">
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200"
                href="{$base_url}"><i class="fa-solid fa-house text-xl"></i></a>
        </div>

        {* <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors duration-200" 
               href="{$base_url}page/home">Take an appointment</a>
        </div> *}
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors  duration-200"
                href="{$base_url}page/about">
                <p class="text-xl">A propos</p>
            </a>
        </div>
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors  duration-200"
                href="{$base_url}page/about">
                <p class="text-xl">Service</p>
            </a>
        </div>
        <div class="navbarItems flex gap-4">
            {if isset($user.user_id) && $user.user_id != ''}
                <div class="navbarItems"> 
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="{$base_url}page/appointment">Mes rendez-vous</a>
                </div>
 
                {if $user.user_role == 'SUPERADMIN'}
                    <div class="navbarItems">
                        <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                            href="{$base_url}user/manage">Manage</i></a>
                    </div>
                {/if}

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="{$base_url}user/logout"><i class="fa-solid fa-right-from-bracket text-xl"></i></a>
                </div>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="{$base_url}user/edit_profile"><i class="fa-solid fa-pen-to-square text-xl"></i></a>
                </div>

            {else}
                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="{$base_url}user/login">Login</a>
                </div>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors text-xl duration-200"
                        href="{$base_url}user/registration">Registration</a>
                </div>
            {/if}
        </div>
    </nav>
</div>