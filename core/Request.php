<?php
class Request
{
    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isGet(): bool
    {
        return $this->method() === 'GET';
    }

    public function isPost(): bool
    {
        return $this->method() === 'POST';
    }

    public function isPut(): bool
    {
        return $this->method() === 'PUT';
    }

    public function isDelete(): bool
    {
        return $this->method() === 'DELETE';
    }

    public function getUri(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getQueryParams(): array
    {
        return $_GET;
    }

    public function getPostData(): array
    {
        return $this->sanitizeInput($_POST);
    }

    public function getJsonBody(): array
    {
        $json = file_get_contents('php://input');
        return $this->sanitizeInput(json_decode($json, true) ?? []);
    }

    public function getBody(): array
    {
        if ($this->isPost() || $this->isPut()) {
            // Cek tipe konten
            $contentType = $_SERVER['CONTENT_TYPE'] ?? '';

            // Jika konten adalah JSON
            if (strpos($contentType, 'application/json') !== false) {
                return $this->getJsonBody();
            }

            // Jika konten adalah form biasa (application/x-www-form-urlencoded)
            if (strpos($contentType, 'application/x-www-form-urlencoded') !== false) {
                return $this->getPostData();
            }

            // Jika konten adalah multipart/form-data (untuk form dengan file upload)
            if (strpos($contentType, 'multipart/form-data') !== false) {
                return $this->getPostData();  // Data file akan tersedia di $_FILES
            }
        }
        return [];
    }

    private function sanitizeInput(array $data): array
    {
        return array_map(fn($value) => is_string($value) ? htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8') : $value, $data);
    }
}