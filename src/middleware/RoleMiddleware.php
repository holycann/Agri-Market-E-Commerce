<?php

require_once __DIR__ . '/../../core/BaseMiddleware.php';

class RoleMiddleware extends BaseMiddleware
{
    private array $allowedRoles;

    public function __construct(array $allowedRoles)
    {
        $this->allowedRoles = $allowedRoles;
    }

    public function handle()
    {
        if (!in_array($_SESSION['role'], $this->allowedRoles)) {
            Response::redirect('/');
            return false;
        }

        return true;
    }
}