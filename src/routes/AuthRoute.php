<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/AuthController.php';

Router::post('/login', [AuthController::class, 'login']);
Router::post('/register', [AuthController::class, 'register']);
Router::post('/logout', [AuthController::class, 'logout']);
