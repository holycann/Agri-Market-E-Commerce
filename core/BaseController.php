<?php

class BaseController
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    protected function render(string $view, array $data = []): void
    {
        Response::render($view, $data);
    }

    protected function json(array $data, int $status = 200): void
    {
        Response::json($data, $status);
    }

    protected function redirect(string $url, int $status = 302): void
    {
        Response::redirect($url, $status);
    }
}
