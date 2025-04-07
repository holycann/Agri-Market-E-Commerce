<?php
/**
 * Application Entry Point
 * 
 * This is the main entry point for the AgriMarket application.
 * It initializes the required environment settings and routes
 * then dispatches the incoming HTTP request to the appropriate handler.
 * 
 * @version 1.0
 */

// Configure error reporting and timezone
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_log', __DIR__ . '/log/php-error.log');
date_default_timezone_set('Asia/Bangkok');
require_once __DIR__ . '/config/AppConfig.php';

// Include all necessary route definitions
require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/src/routes/AdminRoute.php';
require_once __DIR__ . '/src/routes/ApiRoute.php';
require_once __DIR__ . '/src/routes/AuthRoute.php';
require_once __DIR__ . '/src/routes/PagesRoute.php';
require_once __DIR__ . '/src/routes/UserRoute.php';
require_once __DIR__ . '/src/routes/VendorRoute.php';


// Dispatch the incoming request to the appropriate handler
// This will match the URL to a registered route and execute the corresponding controller method
Router::dispatch();

?>