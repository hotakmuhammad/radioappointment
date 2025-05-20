<nav class="bg-gray-800 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      
      <div class="flex-shrink-0">
        <a href="{$base_url}" class="text-xl font-bold text-white hover:text-gray-300"><i class="fa-solid fa-house"></i></a>
      </div>

      <div class="hidden sm:flex sm:space-x-4">
        <a href="{$base_url}page/about" class="px-3 py-2 rounded-md text-lg hover:bg-gray-700">A propos</a>
      </div>

      <div class="relative">
        <button id="userMenuButton" class="flex items-center px-3 py-2 rounded-md text-lg hover:bg-gray-700">
          Mon Profil
          <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        
        <div id="userDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white text-black rounded-md shadow-lg z-20">
          {if isset($user.user_id)}
            <a href="{$base_url}appointment/my_appointments" class="block px-4 py-2 text-lg hover:bg-gray-100">Mes RDVs</a>
            <a href="{$base_url}appointment/archived" class="block px-4 py-2 text-lg hover:bg-gray-100">RDVs archivés</a>
            {if $user.user_role == 'ADMIN' || $user.user_role == 'SUPERADMIN'}
              <a href="{$base_url}user/manage" class="block px-4 py-2 text-lg hover:bg-gray-100">Utilisateurs</a>
              <a href="{$base_url}appointment/manage" class="block px-4 py-2 text-lg hover:bg-gray-100">Gérer RDVs</a>
            {/if}
            <a href="{$base_url}user/edit_profile" class="block px-4 py-2 text-lg hover:bg-gray-100">Modification</a>
            <a href="{$base_url}user/logout" class="block px-4 py-2 text-lg hover:bg-gray-100">Déconnexion</a>
          {else}
            <a href="{$base_url}user/login" class="block px-4 py-2 text-lg hover:bg-gray-100">Connexion</a>
            <a href="{$base_url}user/registration" class="block px-4 py-2 text-lg hover:bg-gray-100">Inscription</a>
          {/if}
        </div>
      </div>

      <!-- Mobile toggle -->
      <div class="sm:hidden">
        <button id="mobileMenuButton" class="text-gray-300 hover:text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  
  <div id="mobileMenu" class="hidden sm:hidden px-2 pb-3 space-y-1">
    <a href="{$base_url}page/about" class="block px-3 py-2 rounded-md text-sm text-white hover:bg-gray-700">A propos</a>
    {if isset($user.user_id)}
      <a href="{$base_url}appointment/my_appointments" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Mes RDVs</a>
      <a href="{$base_url}appointment/archived" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">RDVs archivés</a>
      {if $user.user_role == 'ADMIN' || $user.user_role == 'SUPERADMIN'}
        <a href="{$base_url}user/manage" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Utilisateurs</a>
        <a href="{$base_url}appointment/manage" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Gérer RDVs</a>
      {/if}
      <a href="{$base_url}user/edit_profile" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Modification</a>
      <a href="{$base_url}user/logout" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Déconnexion</a>
    {else}
      <a href="{$base_url}user/login" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Connexion</a>
      <a href="{$base_url}user/registration" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Inscription</a>
    {/if}
  </div>
</nav>


<script src="{$base_url}assets/script/script_global.js" defer></script>
