<?php

require_once __DIR__ . '/../../core/Router.php';
require_once __DIR__ . '/../controllers/PagesController.php';
require_once __DIR__ . '/../controllers/ProductController.php';


Router::get('/', [PagesController::class, 'IndexPage']);
Router::get('/login', [PagesController::class, 'LoginPage'], [AuthMiddleware::class]);
Router::get('/register', [PagesController::class, 'RegisterPage'], [AuthMiddleware::class]);
Router::get('/404', [PagesController::class, 'NotFoundPage'], [AuthMiddleware::class]);

Router::group([
    'prefix' => 'products',
], function () {
    Router::get('', [ProductController::class, 'IndexPage']);
    Router::get('/{id}', [ProductController::class, 'DetailPage']);
});

?>