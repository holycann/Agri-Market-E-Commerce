<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/VendorController.php';
require_once __DIR__ . '/../middleware/AuthMiddleware.php';

Router::group([
    'prefix' => 'vendor',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['vendor', 'admin', 'staff']]
    ]
], function () {
    Router::get('/', [VendorController::class, 'index']);
    Router::get('/{id}', [VendorController::class, 'show']);
    Router::post('/', [VendorController::class, 'store']);
    Router::put('/{id}', [VendorController::class, 'update']);
    Router::delete('/{id}', [VendorController::class, 'delete']);
});