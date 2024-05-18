<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartDent - </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Mis Estilos -->
    <link rel="stylesheet" href="/build/css/app.css">

</head>

<body>

    <?php
        $url_auth = ['/login', '/registro', '/olvide', '/reestablecer', '/mensaje', '/confirmar-cuenta'];

        if (in_array($url_actual, $url_auth)) {
            echo $contenido;
        } else {
            include_once __DIR__ . '/templates/header.php';
            echo $contenido;
            include_once __DIR__ . '/templates/footer.php';
        }
    ?>

</body>

</html>