<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/AdminController.php';

Router::group([
    'prefix' => 'admin',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin']]
    ]
], function () {
    Router::get('/', [AdminController::class, 'index']);
    Router::get('/{id}', [AdminController::class, 'show']);
    Router::post('/', [AdminController::class, 'store']);
    Router::put('/{id}', [AdminController::class, 'update']);
    Router::delete('/{id}', [AdminController::class, 'delete']);
});