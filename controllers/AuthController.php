<?php
// require_once __DIR__.'/../classes/config.php';
namespace Controllers;

use MVC\Router;

class AuthController {

    public static function login(Router $router) {

        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function registro(Router $router) {
        session_destroy();
        $router->render('auth/registro', [
            'titulo' => 'Crea tu cuenta en SmartDent'
        ]);
    }

    public static function profile(Router $router) {

        $router->render('auth/profile', [
            'titulo' => 'Perfil'
        ]);
    }
    
    public static function callback(Router $router) {

        $router->render('auth/callback', []);
    }
    public static function logout(Router $router) {

        $router->render('auth/logout', []);
    }
}