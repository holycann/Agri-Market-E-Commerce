<?php

class RoleMiddleware extends BaseMiddleware
{
    private array $allowedRoles;

    public function __construct(array $allowedRoles)
    {
        $this->allowedRoles = $allowedRoles;
    }

    public function handle()
    {
        if (!isset($_SESSION['user']) || !isset($_SESSION['user']['role'])) {
            Response::redirect('/login');
            return false;
        }

        if (!in_array($_SESSION['user']['role'], $this->allowedRoles)) {
            Response::redirect('/');
            return false;
        }

        return true;
    }
}