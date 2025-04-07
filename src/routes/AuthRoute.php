<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/AuthController.php';

Router::post('/login', [AuthController::class, 'login'], [AuthMiddleware::class]);
Router::post('/register', [AuthController::class, 'register'], [AuthMiddleware::class]);
Router::post('/logout', [AuthController::class, 'logout'], [AuthMiddleware::class]);
