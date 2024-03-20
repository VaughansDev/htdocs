<?php
require '../inc/config.php';

if (!isset($_GET['code'])) {
    echo 'no code';
    exit();
} 

$discord_code = $_GET['code'];

$payload = [
    'code' => $discord_code,
    'client_id' => '1206308062714011708',
    'client_secret' => 'AgW60anmcHE406T90j1ZZCdk_8kiAGoC',
    'grant_type' => 'authorization_code',
    'redirect_uri' => 'http://khaosdevelopment.com/account/oauth/discord-oauth-process-register.php',
    'scope' => 'identify%20email',
];


$payload_string = http_build_query($payload);
$discord_token_url = "https://discordapp.com/api/oauth2/token";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $discord_token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);
$access_token = $result['access_token'];

$discord_users_url = "https://discordapp.com/api/users/@me";
$header = array("Authorization: Bearer $access_token", "Content-Type: application/x-www-form-urlencode");

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $discord_users_url);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);

$discord_id = $result['id'];
$discord_username = $result['username'];
$discord_displayname = $result['global_name'];
$discord_avatar = $result['avatar'];
$discord_email = $result['email'];
$discord_email_verified = $result['verified'];

header("location: " . $_CONFIG['accounturl'] . "/oauth/external-registration.php?method=discord&discord_id=". $discord_id."&discord_username=". $discord_username."&discord_displayname=". $discord_displayname."&discord_avatar=". $discord_avatar."&discord_email=". $discord_email."&discord_email_verified=". $discord_email_verified);
