<?php
/* Smarty version 4.3.4, created on 2025-05-20 13:04:52
  from 'C:\wamp64\www\radioappointment\views\_partiel\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682c7df4b2e106_84676270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a975b4cffb40b9ed9fa5e543302d1a77c3cd7b96' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\_partiel\\nav.tpl',
      1 => 1747746291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682c7df4b2e106_84676270 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="bg-gray-800 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      
      <div class="flex-shrink-0">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="text-xl font-bold text-white hover:text-gray-300"><i class="fa-solid fa-house"></i></a>
      </div>

      <div class="hidden sm:flex sm:space-x-4">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about" class="px-3 py-2 rounded-md text-lg hover:bg-gray-700">A propos</a>
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
          <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id']))) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/my_appointments" class="block px-4 py-2 text-lg hover:bg-gray-100">Mes RDVs</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/archived" class="block px-4 py-2 text-lg hover:bg-gray-100">RDVs archivés</a>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'ADMIN' || $_smarty_tpl->tpl_vars['user']->value['user_role'] == 'SUPERADMIN') {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/manage" class="block px-4 py-2 text-lg hover:bg-gray-100">Utilisateurs</a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/manage" class="block px-4 py-2 text-lg hover:bg-gray-100">Gérer RDVs</a>
            <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile" class="block px-4 py-2 text-lg hover:bg-gray-100">Modification</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/logout" class="block px-4 py-2 text-lg hover:bg-gray-100">Déconnexion</a>
          <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" class="block px-4 py-2 text-lg hover:bg-gray-100">Connexion</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/registration" class="block px-4 py-2 text-lg hover:bg-gray-100">Inscription</a>
          <?php }?>
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
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about" class="block px-3 py-2 rounded-md text-sm text-white hover:bg-gray-700">A propos</a>
    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value['user_id']))) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/my_appointments" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Mes RDVs</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/archived" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">RDVs archivés</a>
      <?php if ($_smarty_tpl->tpl_vars['user']->value['user_role'] == 'ADMIN' || $_smarty_tpl->tpl_vars['user']->value['user_role'] == 'SUPERADMIN') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/manage" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Utilisateurs</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
appointment/manage" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Gérer RDVs</a>
      <?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/edit_profile" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Modification</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/logout" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Déconnexion</a>
    <?php } else { ?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/login" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Connexion</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
user/registration" class="block px-3 py-2 text-sm text-white hover:bg-gray-700">Inscription</a>
    <?php }?>
  </div>
</nav>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/script/script_global.js" defer><?php echo '</script'; ?>
>
<?php }
}
