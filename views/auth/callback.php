<?php
require_once __DIR__.'../../../classes/config.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;

    $client->setAccessToken($token['access_token']);

    // Obtener perfil de usuario
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    
    $id = $google_account_info->id;
    $email = $google_account_info->email;
    $nombre = $google_account_info->nombre;
    $picture = $google_account_info->picture;

    // Conectar a la base de datos y almacenar o actualizar el usuario
    $mysqli = new mysqli("localhost", "root", "", "appCitasOdontologicas");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Comprobar si el usuario ya existe
    $result = $mysqli->query("SELECT * FROM usuarios WHERE google_id = '$id'");

    if ($result->num_rows > 0) {
        // El usuario existe, actualizar
        $mysqli->query("UPDATE usuarios SET nombre = '$nombre', email = '$email', profile_picture = '$picture' WHERE google_id = '$id'");
    } else {
        // El usuario no existe, insertar
        $mysqli->query("INSERT INTO usuarios (google_id, nombre, email, profile_picture) VALUES ('$id', '$nombre', '$email', '$picture')");
    }

    $mysqli->close();

    // Redirigir al perfil del usuario
    header('Location: /profile');
    exit();
} else {
    header('Location: /');
    exit();
}
?>
