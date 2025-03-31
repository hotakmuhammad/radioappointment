<div class="">

	<nav class="mainNav flex">

		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}">Accueil</a>
		</div>	
			

		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}page/home">Take an appointment</a>
		</div>	

		<div class="navbarItems m-5 flex gap-4">
			{if isset($user.user_id) && $user.user_id != ''}

				<div class="">
					<a class="buttonLink" href="{$base_url}page/appointment">Mes rendez-vous</a>
				</div>

				<div class="">
					<p>Bonjour</p>
					{$smarty.session.user.user_firstname}
				</div>
				<div class="">
					<a class="" href="{$base_url}user/logout"> se deconnecter </a>
				</div>
				<div>
					<a class="" href="{$base_url}user/edit_profile">Edit profile</a>
				</div>

			{else}
				<div class="navbarItems">
					<a class="buttonLink" href="{$base_url}user/login">Login</a>
				</div>	

				<div class="navbarItems">
					<a class="buttonLink" href="{$base_url}user/registration">Registration</a>
				</div>
			{/if}
		</div>

	</nav>
</div>