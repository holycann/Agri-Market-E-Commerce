<?php

require_once __DIR__ . '/../../core/BaseMiddleware.php';

class AuthMiddleware extends BaseMiddleware
{
    public function handle()
    {
        $isLoginOrRegister = strpos($_SERVER['REQUEST_URI'], '/login') !== false || strpos($_SERVER['REQUEST_URI'], '/register') !== false;

        if (
            $isLoginOrRegister &&
            (isset($_SESSION['email']) || isset($_COOKIE['remember_me']))
        ) {
            if ($isLoginOrRegister) {
                Response::redirect(BASE_URL . '/');
            }
            return false;
        }

        if (
            !$isLoginOrRegister &&
            (!isset($_SESSION['email']) || !isset($_COOKIE['remember_me']))
        ) {
            if (!$isLoginOrRegister) {
                Response::redirect(BASE_URL . '/login');
            }
            return false;
        }

        return true;
    }
}