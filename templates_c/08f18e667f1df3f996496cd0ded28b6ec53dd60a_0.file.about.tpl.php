<?php
/* Smarty version 4.3.4, created on 2025-05-19 13:31:13
  from 'C:\wamp64\www\radioappointment\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682b32a1816152_84127073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08f18e667f1df3f996496cd0ded28b6ec53dd60a' => 
    array (
      0 => 'C:\\wamp64\\www\\radioappointment\\views\\about.tpl',
      1 => 1747661251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682b32a1816152_84127073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1620531085682b32a1812b97_15628036', "contenu");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "views/layout.tpl");
}
/* {block "contenu"} */
class Block_1620531085682b32a1812b97_15628036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1620531085682b32a1812b97_15628036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<section class="max-w-5xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">

		<h1 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Page à propos</h1>

		<section class="m-12">
			<h2 class="text-2xl font-semibold text-gray-800 mb-4">Notre Mission</h2>
			<p class="text-gray-600 leading-relaxed">
				RadioAppointment est une plateforme numérique conçue pour simplifier la prise de rendez-vous dans les
				cliniques de radiologie. Notre objectif est de permettre aux patients de gérer facilement leurs rendez-vous
				en ligne, de créer un compte sécurisé, et de mettre à jour leurs informations personnelles en quelques
				clics, tout en offrant une expérience fluide et intuitive.
			</p>
		</section>

		<section class="m-12">
			<h2 class="text-2xl font-semibold text-gray-800 mb-4">Fonctionnalités Principales</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<div class="bg-white p-6 rounded-lg shadow-md">
					<h3 class="text-lg font-medium text-indigo-600 mb-2">Gestion des Utilisateurs</h3>
					<ul class="list-disc list-inside text-gray-600 space-y-2">
						<li>Création, connexion et déconnexion de compte sécurisé</li>
						<li>Modification des informations personnelles et du mot de passe</li>
						<li>Gestion des rôles : Utilisateurs, Admins, Super Admins</li>
						<li>Contrôle avancé par les Admins et Super Admins (bannissement, suppression, changement de rôle)
						</li>
						<li>Gestion des informations des utilisateurs par les Admins et Super Admins</li>
					</ul>
				</div>
				<div class="bg-white p-6 rounded-lg shadow-md">
					<h3 class="text-lg font-medium text-indigo-600 mb-2">Gestion des Rendez-vous</h3>
					<ul class="list-disc list-inside text-gray-600 space-y-2">
						<li>Prise, remplacement et annulation de rendez-vous en ligne</li>
						<li>Accès aux examens proposés : IRM, Scanner, Rayons X, etc.</li>
						<li>Consultation des rendez-vous à venir et passés</li>
						<li>Gestion des rendez-vous par les Admins et Super Admins</li>
					</ul>
				</div>
			</div>
		</section>


		<section class="m-12">
			<h2 class="text-2xl font-semibold text-gray-800 mb-4">Public Cible</h2>
			<p class="text-gray-600 leading-relaxed">
				RadioAppointment s’adresse principalement aux patients souhaitant accéder rapidement et facilement aux
				services de radiologie. La plateforme est également conçue pour le personnel des cliniques, notamment les
				administrateurs, qui gèrent les rendez-vous et les comptes utilisateurs de manière efficace et sécurisée.
			</p>
		</section>


		<section class="m-12">
			<h2 class="text-2xl font-semibold text-gray-800 mb-4">Contexte du Projet</h2>
			<p class="text-gray-600 leading-relaxed mb-4">
				RadioAppointment a été développé dans le cadre de ma formation de Développeur Web & Web Mobile, à la fois
				comme une opportunité professionnelle et un projet pédagogique de rattrapage. Ce projet vise à démontrer mes
				compétences techniques en développement d’applications web, tout en répondant à un besoin réel : simplifier
				la gestion des rendez-vous dans une clinique de radiologie.
			</p>
			<p class="text-gray-600 leading-relaxed">
				La plateforme offre une interface conviviale, une gestion sécurisée des utilisateurs et des niveaux d’accès
				évolutifs, tout en améliorant l’organisation interne des cliniques. Ce projet reflète mon engagement à créer
				des solutions numériques pratiques et innovantes.
			</p>
		</section>
	</section>
<?php
}
}
/* {/block "contenu"} */
}
