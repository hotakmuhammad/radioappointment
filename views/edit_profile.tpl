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
        <form action="{$base_url}user/edit_profile" method="post" >
            <fieldset>
                <legend>Informations personnelles</legend>
                <p>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name"  >
                </p>
                <p>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstName" id="firstName">
                </p>
                <p>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" >
                </p>
                <p>
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" id="phone" > 
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
                    <input type="password" name="password" id="password">
                </p>
                <p>
                    <label for="passwd_confirm">Confirmation du mot de passe</label>
                    <input type="password" name="confirmPassword" id="confirmPassword">
                </p>
            </fieldset>
            <p>
            Sqaan@444$hello124578
            Sqaan@444$hello1245
                <input type="submit" />
            </p>		
        </form>
    </div>
{/block}