{extends file="views/layout.tpl"}

{include file="views/_partiel/header.tpl"}
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

    
    <h1>Creation account Page</h1>
    <div class="container">
        <form action="{$base_url}/user/registration" method="post" style="border:1px solid #ccc">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="firstName"><b>Nom</b></label>
            <input type="text" placeholder="Enter Name" id="firstName" name="name" value="{$objUser->getName()}">

            <label for="lastName"><b>Prénom</b></label>
            <input type="text" placeholder="Enter Surname" id="lastName" name="firstName" value="{$objUser->getFirstName()}">


            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" id="email" name="email" value="{$objUser->getEmail()}">


            <label for="phone"><b>Phone</b></label>
            <input type="text" placeholder="Enter Phone" id="phone" name="phone" value="{$objUser->getPhone()}">

            <label for="password"><b>Mot de passe</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" >

            <label for="psw-repeat"><b>Confirmez mot de passe</b></label>
            <input type="password" placeholder="Confirmation du mot de passe" id="confirmPassword" name="confirmPassword" >

            

            <div>
                {* <input type="button" value="Annuler"> *}
            </div>
            <div>
            Sqaan@444$hello124578
                <input type="submit" value="Créer compte">
            </div>
        </form>
    </div>
{/block}