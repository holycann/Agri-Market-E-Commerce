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

    public static function redirect(string $url, int $status = 302): void
    {
        header("Location: $url", true, $status);
        exit();
    }

    public static function render(string $view, array $data = []): void
    {
        extract($data, EXTR_SKIP);

        $viewFile = __DIR__ . "/../views/pages/{$view}.php";

        if (!file_exists($viewFile)) {
            self::handleNotFound();
        }

        ob_start();
        require_once $viewFile;
        echo ob_get_clean();
    }

    public static function handleNotFound(): void
    {
        $request = new Request();

        if ($request->isGet()) {
            self::redirect('/404');
        } else {
            self::json(['error' => 'Not Found'], 404);
        }
    }
}