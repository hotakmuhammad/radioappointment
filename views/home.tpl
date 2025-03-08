{extends file="views/layout.tpl"}

{block name="contenu"}
    
    <a href="{$base_url}page/appointment">Prendre un rendez-vous</a></button>
    <a href="{$base_url}page/about">Page à propos</a></button>

    <h1>Accueil + Appointment</h1>
    {* {include file="views/appointment.tpl"} *}
    
{/block}