<?php

namespace Controllers;

use MVC\Router;

class AuthController {

    public static function login(Router $router) {

        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function registro(Router $router) {

        $router->render('auth/registro', [
            'titulo' => 'Crea tu cuenta en SmartDent'
        ]);
    }
}