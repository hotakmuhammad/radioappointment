<div class="">

	<nav class="mainNav flex">

		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}">Accueil</a>
		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}user/registration">Registration</a>

		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}user/login">Login</a>
		</div>	
		<div class="navbarItems m-5">
			<a class="buttonLink" href="{$base_url}appointment/home">Take an appointment</a>
		</div>	

		<div class="navbarItems m-5 flex gap-4">
			{if isset($user.user_id) && $user.user_id != ''}

				<div class="">
					<a class="buttonLink" href="">Mes rendez-vous</a>
				</div>

				<div class="">
					<p>Bonjour</p>
					{$smarty.session.user.first_name}
				</div>
				<div class="">
					<a class="" href="{$base_url}user/logout"> se deconnecter </a>
				</div>
			{/if}
		</div>

	</nav>
</div>