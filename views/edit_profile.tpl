{extends file="views/layout.tpl"}

{block name="contenu"}

    {if (count($arrErrors) >0) }

        <div class="">
            <ul>

                {foreach from=$arrErrors item=strError}

                    <li>{$strError}</li>

                {/foreach}
            </ul>

        </div>

    {/if}

    <h1>Modification</h1>
    <div class="container">
    <form action="user/edit_profile" method="post" >
    <fieldset>
        <legend>Informations personnelles</legend>
        <p>
            <label for="name">Nom</label>
            <input type="text" name="firstName" id="firstName" value="{$objUser->getFirstname()}">
        </p>
        <p>
            <label for="firstname">Prénom</label>
            <input type="text" name="lastName" id="lastName" value="{$objUser->getLastName()}">
        </p>
        <p>
            <label for="mail">Email</label>
            <input type="email" name="email" id="email" value="{$objUser->getEmail()}">
        </p>
        <p>
            <label for="mail">Phone</label>
            <input type="tel" name="phone" id="phone" value="{$objUser->getPhone()}">
        </p>
        {* <p>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" value="{if isset($smarty.cookies.pseudo)}{$smarty.cookies.pseudo}{/if}">
        </p> *}
    </fieldset>
    <fieldset>
        <legend>Informations de connexion</legend>
        <p>
            <label for="password_old">Mot de passe actuel</label>
            <input type="password" name="oldPassword" id="oldPassword">
        </p>
        <p>
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="pwd" id="password">
        </p>
        <p>
            <label for="passwd_confirm">Confirmation du mot de passe</label>
            <input type="password" name="confirmPassword" id="confirmPassword">
        </p>
    </fieldset>
    <p>
        <input type="submit" />
    </p>		
</form>
    </div>
{/block}