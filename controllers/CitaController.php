<?php 

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        //  No vuelvas a iniciar sesión: ya está activa en Router.php
        // Solo lee los datos, si existen
        $nombre = $_SESSION['nombre'] ?? '';

        isAuth();

        // Renderizar la vista y pasar el script al layout
        $router->render('cita/index', [
            'nombre' => $nombre,
            'id' => $_SESSION['id'],
            'script' => '<script src="/build/js/app.js"></script>'
        ]);
    } 
}
