<?php

require_once __DIR__.'/../vendor/autoload.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID_HERE');
$client->setClientSecret('YOUR_CLIENT_SECRET_HERE');
$client->setRedirectUri('http://localhost:3000/callback');
$client->addScope("email");
$client->addScope("profile");

?>

