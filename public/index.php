<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\AuthController;
use Controllers\PaginasController;
use MVC\Router;

$router = new Router();

// Login
$router->get('/login', [AuthController::class, 'login']);

// Crear cuenta
$router->get('/registro', [AuthController::class, 'registro']);

// Área pública
$router->get('/', [PaginasController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();