<?php
/* Smarty version 4.3.4, created on 2025-05-20 13:50:49
  from 'C:\wamp64\www\radioappointment\views\mentions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682c88b98316c4_49961270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b31b32b37650620e6d2c082189168d06d80a4090' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\mentions.tpl',
      1 => 1747749047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682c88b98316c4_49961270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266797409682c88b9830b15_50260162', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_266797409682c88b9830b15_50260162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_266797409682c88b9830b15_50260162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section class="mt-16">
  <h1 class="text-center text-4xl sm:text-5xl font-extrabold mb-12 text-gray-800">
    Mentions légales
  </h1>

  <div class="space-y-10 py-12 px-6 sm:px-12 md:px-24 lg:px-64 bg-white shadow-md rounded-xl">
    <section class="space-y-6 text-gray-700">
      
      <div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Propriétaire du site</h2>
        <p>Nom de l’entreprise ou du propriétaire :</p>
        <p>Adresse :</p>
        <p>Email :</p>
        <p>Téléphone :</p>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Hébergeur du site</h2>
        <p>Nom de l’hébergeur :</p>
        <p>Adresse :</p>
        <p>Téléphone :</p>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900">Cookie</h2>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900">Propriété intellectuelle</h2>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900">Responsabilité</h2>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900">Données personnelles</h2>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-gray-900">Contact</h2>
        <p>
          Pour toute question relative au site ou à son contenu, vous pouvez nous contacter :
        </p>
        <p>Par email :</p>
      </div>
      
    </section>
  </div>
</section>


<?php
}
}
/* {/block "contenu"} */
}
