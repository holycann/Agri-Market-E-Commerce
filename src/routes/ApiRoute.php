<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/AdminController.php';
require_once __DIR__ . '/../middleware/AuthMiddleware.php';
require_once __DIR__ . '/../middleware/RoleMiddleware.php';
require_once __DIR__ . '/../controllers/AuthController.php';
// Auth Api Routes
Router::group([
    'prefix' => 'api/auth'
], function () {
    Router::post('/admin/login', [AdminController::class, 'login']);
    Router::post('/user/login', [AuthController::class, 'login']);
    Router::post('/vendor/login', [VendorController::class, 'login']);
    Router::post('/user/register', [UserController::class, 'store']);
});

// Admin Api Routes
Router::group([
    'prefix' => 'api/admin',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin']]
    ]
], function () {
    Router::get('/', [AdminController::class, 'list']);
    Router::get('/{id}', [AdminController::class, 'get']);
    Router::post('/', [AdminController::class, 'create']);
    Router::put('/{id}', [AdminController::class, 'update']);
    Router::delete('/{id}', [AdminController::class, 'delete']);
});

// Vendor Api Routes
Router::group([
    'prefix' => 'api/vendor',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor']]
    ]
], function () {
    Router::get('/', [VendorController::class, 'list']);
    Router::get('/{id}', [VendorController::class, 'get']);
    Router::post('/', [VendorController::class, 'create']);
    Router::put('/{id}', [VendorController::class, 'update']);
    Router::delete('/{id}', [VendorController::class, 'delete']);
});

// User Api Routes
Router::group([
    'prefix' => 'api/user',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'customer']]
    ]
], function () {
    Router::get('/', [UserController::class, 'list']);
    Router::get('/{id}', [UserController::class, 'get']);
    Router::post('/', [UserController::class, 'create']);
    Router::put('/{id}', [UserController::class, 'update']);
    Router::delete('/{id}', [UserController::class, 'delete']);
});

// Product Api Routes
Router::group([
    'prefix' => 'api/product',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'customer']]
    ]
], function () {
    Router::get('/', [ProductController::class, 'list']);
    Router::get('/{id}', [ProductController::class, 'get']);
    Router::post('/', [ProductController::class, 'create']);
    Router::put('/{id}', [ProductController::class, 'update']);
    Router::delete('/{id}', [ProductController::class, 'delete']);
});

// Order Api Routes
Router::group([
    'prefix' => 'api/order',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'user']]
    ]
], function () {
    Router::get('/', [OrderController::class, 'list']);
    Router::get('/{id}', [OrderController::class, 'get']);
    Router::post('/', [OrderController::class, 'create']);
    Router::put('/{id}', [OrderController::class, 'update']);
    Router::delete('/{id}', [OrderController::class, 'delete']);
});

// Payment Api Routes
Router::group([
    'prefix' => 'api/payment',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'customer']]
    ]
], function () {
    Router::get('/', [PaymentController::class, 'list']);
    Router::get('/{id}', [PaymentController::class, 'get']);
    Router::post('/', [PaymentController::class, 'create']);
    Router::put('/{id}', [PaymentController::class, 'update']);
    Router::delete('/{id}', [PaymentController::class, 'delete']);
});

// Review Api Routes
Router::group([
    'prefix' => 'api/review',
    'middleware' => [
        AuthMiddleware::class,
        [RoleMiddleware::class, ['admin', 'vendor', 'customer']]
    ]
], function () {
    Router::get('/', [ReviewController::class, 'list']);
    Router::get('/{id}', [ReviewController::class, 'get']);
    Router::post('/', [ReviewController::class, 'create']);
    Router::put('/{id}', [ReviewController::class, 'update']);
    Router::delete('/{id}', [ReviewController::class, 'delete']);
});