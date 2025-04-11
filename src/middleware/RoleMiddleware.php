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
            // Show Output First And Redirect
            Response::json(['error' => 'You do not have permission to access this page', 'redirect' => '/'], 403);

            return false;
        }

        return true;
    }
}