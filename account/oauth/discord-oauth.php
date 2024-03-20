<?php
if ($_GET['req_type'] == 'login') {
    $discordurl = 'https://discord.com/oauth2/authorize?client_id=1206308014936690799&response_type=code&redirect_uri=http%3A%2F%2Fkhaosdevelopment.com%2Faccount%2Foauth%2Fdiscord-oauth-process-login.php&scope=identify+email';
    header("location: $discordurl");
    exit();
} elseif ($_GET['req_type'] == 'register') {
    $discordurl = 'https://discord.com/oauth2/authorize?client_id=1206308062714011708&response_type=code&redirect_uri=http%3A%2F%2Fkhaosdevelopment.com%2Faccount%2Foauth%2Fdiscord-oauth-process-register.php&scope=identify+email';
    header("location: $discordurl");
    exit();
} else {
    header("location: ".$_CONFIG['accounturl']."/login.php");
}