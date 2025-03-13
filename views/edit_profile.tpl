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
        <form action="" method="post" style="border:1px solid #ccc">
            <fieldset class="col-12 col-md-6">

                <legend class="green-title">Informations personnelles</legend>

                <div class="form-group mt-3">

                    <label for="name">Nom</label>

                    <input type="text" class="form-control" name="lastName" id="lastName" value="{$objUser->getFirstname()}">

                </div>

                <div class="form-group mt-3">

                    <label for="firstname">Prénom</label>

                    <input type="text" class="form-control" name="lastName" id="lastName" value="{$objUser->getLastName()}">

                </div>

                <div class="form-group mt-3">

                    <label for="mail">Email</label>

                    <input type="email" class="form-control" name="email" id="email" value="{$objUser->getEmail()}">

                </div>

                <div class="form-group mt-3">

                    <label for="mail">Phone</label>

                    <input type="text" class="form-control" name="phone" id="phone" value="{$objUser->getPhone()}">

                </div>

            </fieldset>
                <fieldset>
                    <legend>Informations de connexion</legend>
                    <p>
                        <label for="password_old">Mot de passe actuel</label>
                        <input type="password" name="oldPassword" id="password_old">
                    </p>
                    <p>
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password">
                    </p>
                    <p>
                        <label for="passwd_confirm">Confirmation du mot de passe</label>
                        <input type="password" name="confirm-password" id="confirm-password">
                    </p>
            </fieldset>

            <div>
                {* <input type="button" value="Annuler"> *}
            </div>
            <div>
            Sqaan@444$hello124578
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
{/block}