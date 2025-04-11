<?php

require_once __DIR__ . '/../core/Request.php';
require_once __DIR__ . '/../core/Response.php';

class Router
{
    private static $routes = [];
    private static $groupPrefix = '';
    private static $groupMiddleware = null;


    public static function get(string $path, $handler, $middleware = null)
    {
        self::addRoute('GET', $path, $handler, $middleware);
    }

    public static function post(string $path, $handler, $middleware = null)
    {
        self::addRoute('POST', $path, $handler, $middleware);
    }

    public static function put(string $path, $handler, $middleware = null)
    {
        self::addRoute('PUT', $path, $handler, $middleware);
    }

    public static function delete(string $path, $handler, $middleware = null)
    {
        self::addRoute('DELETE', $path, $handler, $middleware);
    }

    public static function group(array $options, callable $callback)
    {
        $previousPrefix = self::$groupPrefix;
        $previousMiddleware = self::$groupMiddleware;

        self::$groupPrefix .= isset($options['prefix']) ? trim($options['prefix'], '/') . '/' : '';
        self::$groupMiddleware = $options['middleware'] ?? self::$groupMiddleware;

        $callback();

        self::$groupPrefix = $previousPrefix;
        self::$groupMiddleware = $previousMiddleware;
    }

    private static function addRoute(string $method, string $path, $handler, $middleware = null)
    {
        $normalizedPath = trim(self::$groupPrefix . trim($path, '/'), '/') ?: '/';
        $middlewareToUse = $middleware ?? self::$groupMiddleware;

        self::$routes[] = [
            'method' => strtoupper($method),
            'path' => $normalizedPath,
            'handler' => $handler,
            'middleware' => $middlewareToUse
        ];
    }


    public static function dispatch()
    {
        $request = new Request();
        $requestMethod = $request->method();
        $requestUri = str_replace(ltrim(BASE_ENDPOINT, '/'), '', trim($request->getUri(), '/')) ?: '/';

        foreach (self::$routes as $route) {
            $pattern = '#^/?' . preg_replace('/\{(\w+)\}/', '(?<$1>[^/]+)', $route['path']) . '$#';

            if ($route['method'] === $requestMethod && preg_match($pattern, $requestUri, $matches)) {

                // Handle middleware
                if ($route['middleware']) {
                    $middlewares = is_array($route['middleware']) ? $route['middleware'] : [$route['middleware']];

                    foreach ($middlewares as $middlewareDef) {
                        if (is_array($middlewareDef)) {
                            [$middlewareClass, $params] = $middlewareDef;
                            $middleware = new $middlewareClass(...(array) $params);
                        } else {
                            $middlewareClass = $middlewareDef;
                            $middleware = new $middlewareClass();
                        }

                        if (!method_exists($middleware, 'handle')) {
                            Response::json(['error' => "Method handle not found in middleware: $middlewareClass"], 500);
                            return;
                        }

                        if (!$middleware->handle($request)) {
                            return;
                        }
                    }
                }


                // Ambil parameter dinamis
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                // Jalankan handler
                if (is_callable($route['handler'])) {
                    $response = call_user_func_array($route['handler'], [$request, ...array_values($params)]);
                } elseif (is_array($route['handler'])) {
                    [$controller, $method] = $route['handler'];
                    if (!class_exists($controller) || !method_exists($controller, $method)) {
                        Response::json(['error' => "Controller or method not found: $controller@$method"], 500);
                        return;
                    }

                    $controllerInstance = new $controller($request);
                    $response = call_user_func_array([$controllerInstance, $method], [$request, ...array_values($params)]);
                } else {
                    Response::json(['error' => 'Invalid route handler'], 500);
                    return;
                }

                // Tangani response
                if (is_array($response)) {
                    Response::json($response);
                } elseif (is_string($response)) {
                    echo $response;
                }

                return;
            }
        }

        // Jika tidak ada yang cocok
        Response::handleNotFound();
    }
}