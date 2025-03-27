<?php 
return <<<PHP
<?php

require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../controllers/{{controllerName}}.php';

Router::get('/{{path}}', [{{controllerName}}::class, 'ClassMethod']);
Router::get('/{{path}}/{id}', [{{controllerName}}::class, 'ClassMethod']);
Router::post('/{{path}}', [{{controllerName}}::class, 'ClassMethod']);
Router::put('/{{path}}/{id}', [{{controllerName}}::class, 'ClassMethod']);
Router::delete('/{{path}}/{id}', [{{controllerName}}::class, 'ClassMethod']);

PHP;