<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/UserController.php';

Router::group([
    'prefix' => 'user',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'customer', 'staff']]
    ]
], function () {
    Router::get('/', [UserController::class, 'index']);
    Router::get('/{id}', [UserController::class, 'show']);
    Router::post('/', [UserController::class, 'store']);
    Router::put('/{id}', [UserController::class, 'update']);
    Router::delete('/{id}', [UserController::class, 'delete']);
});