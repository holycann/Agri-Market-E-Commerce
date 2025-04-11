<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/UserController.php';

Router::group([
    'prefix' => 'settings',
], function () {
    Router::get('/profile', [UserController::class, 'ProfilePage']);
    Router::get('/update-profile', [UserController::class, 'UpdateProfilePage']);
    Router::get('/update-password', [UserController::class, 'UpdatePasswordPage']);
});
