{extends file="views/layout.tpl"}
{block name="contenu"}
    <h1>Login Page</h1>
    <form action="{$base_url}user/login" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{$email}">


        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        Sqaan@444$hello124578
        <input type="submit" value="Connexion">
    </form>
{/block}
