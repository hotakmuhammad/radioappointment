{extends file="views/layout.tpl"}

{include file="views/_partiel/header.tpl"}
{block name="contenu"}

    {if (count($arrErrors) >0) }

        <div class="alert alert-danger form-container mt-3 mb-3">

            {foreach from=$arrErrors item=strError}

                <p>{$strError}</p>

            {/foreach}

        </div>

    {/if}
    <h1>Creation account Page</h1>
    <div class="container">
        <form action="" method="post" style="border:1px solid #ccc">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Nom</b></label>
        <input type="text" placeholder="Enter Name" name="firstName" value="{$objUser->getFirstName()}">

        <label for="firstName"><b>Prénom</b></label>
        <input type="text" placeholder="Enter Surname" name="lastName" value="{$objUser->getLastName()}">


        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" value="{$objUser->getEmail()}">


        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone" name="phone" value="{$objUser->getPhone()}">

        <label for="password"><b>Mot de passe</b></label>
        <input type="password" placeholder="Enter Password" name="password" >

        <label for="psw-repeat"><b>Confirmez mot de passe</b></label>
        <input type="password" placeholder="Confirmation du mot de passe" name="confirm-password" >
        {* 
        <label>Profile picture </b></label>
        <input type="image" > 
    
        {if $objUser->getProfilePic() != ""}
            <img src="uploads/{$objUser->getProfilePic()}">
        {/if}
        <input id="" type="file" accept="image/*" name="profilePic" value="">
    *}
    </div>

    <div>
        {* <input type="button" value="Annuler"> *}
    </div>
    <div>
    Sqaan@444$hello124578
        <input type="submit" value="Creer compte">

  </div>
</form>
{/block}