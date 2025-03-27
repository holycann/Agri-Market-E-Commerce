<?php

class Router
{
    private static $routes = [];

    // Menambahkan middleware sebagai parameter opsional
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

    // Menambahkan middleware ke dalam rute
    private static function addRoute(string $method, string $path, $handler, $middleware = null)
    {
        self::$routes[] = [
            'method' => $method,
            'path' => trim($path, '/'),
            'handler' => $handler,
            'middleware' => $middleware  // Menyimpan middleware untuk rute ini
        ];
    }

    public static function dispatch()
    {
        $request = new Request();
        $requestMethod = $request->method();
        $requestUri = trim($request->getUri(), '/');

        foreach (self::$routes as $route) {
            // Membuat pola untuk rute dinamis
            $pattern = '#^' . preg_replace('/\{(\w+)\}/', '(?<$1>[^/]+)', $route['path']) . '$#';

            if ($route['method'] === $requestMethod && preg_match($pattern, $requestUri, $matches)) {
                // Eksekusi middleware jika ada
                if ($route['middleware']) {
                    $middleware = new $route['middleware'];
                    if (!$middleware->handle()) {
                        return;  // Jika middleware tidak lolos, berhenti
                    }
                }

                // Menyaring parameter dinamis dari rute
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

                // Menjalankan handler
                if (is_callable($route['handler'])) {
                    $response = call_user_func_array($route['handler'], [$request, ...array_values($params)]);
                } elseif (is_array($route['handler'])) {
                    [$controller, $method] = $route['handler'];

                    if (class_exists($controller) && method_exists($controller, $method)) {
                        $controllerInstance = new $controller();
                        $response = call_user_func_array([$controllerInstance, $method], [$request, ...array_values($params)]);
                    } else {
                        Response::json(['error' => "Controller or method not found: $controller@$method"], 500);
                        return;
                    }
                } else {
                    Response::json(['error' => 'Invalid route handler'], 500);
                    return;
                }

                // Jika response adalah array → kirim JSON
                if (is_array($response)) {
                    Response::json($response);
                }

                return;
            }
        }

        // Jika tidak ada rute yang cocok, tampilkan halaman 404
        Response::handleNotFound();
    }
}
