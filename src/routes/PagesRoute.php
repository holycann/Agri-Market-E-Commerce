<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/PagesController.php';

Router::get('/', [PagesController::class, 'IndexPage']);
Router::get('/login', [PagesController::class, 'LoginPage']);
Router::get('/register', [PagesController::class, 'RegisterPage']);
?>