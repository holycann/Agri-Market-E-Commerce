<?php
class Response
{
    public static function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        exit;
    }

    public static function redirect(string $url, string $message, int $status = 302, int $delay = 3): void
    {
        if (!str_contains($url, "/404")) {
            echo "
            <html>
                <head>
                    <meta http-equiv='refresh' content='{$delay};url={$url}' />
                    <title>Redirecting...</title>
                </head>
                <body>
                    <div style='font-family: sans-serif; text-align: center; padding-top: 50px'>
                        <h2>{$message}</h2>
                        <p>Redirecting to <a href='{$url}'>{$url}</a> in {$delay} seconds...</p>
                    </div>
                </body>
            </html>
            ";
        }

        header("Location: $url", true, $status);
        exit();
    }

    public static function render(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        $viewFile = __DIR__ . "/../src/views/{$view}.php";

        // Debugging untuk memastikan view ditemukan
        if (!file_exists($viewFile)) {
            echo "View file not found: " . $viewFile;
            //self::handleNotFound();
            return;
        }

        ob_start();
        require_once $viewFile;
        echo ob_get_clean();
    }

    public static function handleNotFound(): void
    {
        $request = new Request();

        if ($request->isGet()) {
            self::redirect(BASE_URL . '/404', 'Page Not Found', 404, 3);
        } else {
            self::json(['error' => 'Not Found'], 404);
        }
    }
}