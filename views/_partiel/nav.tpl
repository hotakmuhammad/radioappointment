<div class="bg-gray-900">
    <nav class="mainNav flex items-center justify-between max-w-7xl mx-auto px-4 py-4 container mx-auto">
        <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200" 
               href="{$base_url}"><i class="fa-solid fa-house"></i></a>
        </div>
        
        {* <div class="navbarItems">
            <a class="buttonLink px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 transition-colors duration-200" 
               href="{$base_url}page/home">Take an appointment</a>
        </div> *}

        <div class="navbarItems flex items-center gap-4">
            {if isset($user.user_id) && $user.user_id != ''}
                <div>
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200" 
                       href="{$base_url}page/appointment">Mes rendez-vous</a>
                </div>

                <div class="text-white">
                    <a class="text-gray-300 hover:text-white transition-colors duration-200"
                    href="{$base_url}page/profile" 
                    ><p class="text-sm"><i class="fa-solid fa-user"></i></p></a>
                    
                    {* {$smarty.session.user.user_firstname} *}
                </div>
                
                <div>
                    <a class="text-gray-300 hover:text-white transition-colors duration-200" 
                       href="{$base_url}user/logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                </div>
                
                <div>
                    <a class="text-gray-300 hover:text-white transition-colors duration-200" 
                       href="{$base_url}user/edit_profile"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            {else}
                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white text-white hover:text-gray-300 transition-colors duration-200" 
                       href="{$base_url}user/login">Login</a>
                </div>

                <div class="navbarItems">
                    <a class="buttonLink px-4 py-2 text-white hover:text-gray-300 transition-colors duration-200" 
                       href="{$base_url}user/registration">Registration</a>
                </div>
            {/if}
        </div>
    </nav>
</div>