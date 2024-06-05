<?php
require_once __DIR__.'../../../classes/config.php';

// if (!isset($_SESSION['access_token'])) {
//     header('Location: /');
//     exit();
// }
// require_once 'callback.php';

$client->setAccessToken($_SESSION['access_token']);

$google_oauth = new Google_Service_Oauth2($client);
$google_account_info = $google_oauth->userinfo->get();

$name = $google_account_info->name;
$email = $google_account_info->email;
$picture = $google_account_info->picture;

?>

    <h1><?php echo $titulo; ?></h1>
    <h2>Welcome, <?php echo $name; ?></h2>
    <img src="<?php echo $picture; ?>" alt="Profile Picture">
    <p>Email: <?php echo $email; ?></p>
    <a href="/logout">Logout</a>
