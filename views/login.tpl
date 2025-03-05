{extends file="views/layout.tpl"}
{block name="contenu"}
    <h1>Login Page</h1>
    <form action="{$base_url}user/login" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Login</button>
    </form>
{/block}
