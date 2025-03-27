<?php

require_once __DIR__ . '/../core/Middleware.php';

class AuthMiddleware extends BaseMiddleware
{
    public function handle()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            Response::json(['error' => 'Unauthorized'], 401);

            sleep(3);

            Response::redirect('/login');
            return false;
        }
        return true;
    }
}