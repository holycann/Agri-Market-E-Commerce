<?php

require_once __DIR__ . '/../../core/BaseService.php';
require_once __DIR__ . '/../repositories/UserRepository.php';

session_start();

class AuthService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new UserRepository());
    }


    public function login(array $data): UserModel|array
    {
        // Validate email format
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return ["error" => "Invalid email format"];
        }

        // Check if email is already registered
        $existingUser = $this->repository->findByEmail($data['email'])->toArray();
        if (!$existingUser) {
            return ["error" => "Email not found"];
        }

        if (!password_verify($data['password'], $existingUser['password'])) {
            return ["error" => "Invalid password"];
        }

        if (isset($data['remember_me']) && $data['remember_me']) {
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $token = hash('sha256', $existingUser['email'] . $userAgent);
            setcookie("remember_me", $token, time() + (86400 * 30), "/", "", false, true);
        }

        $_SESSION['email'] = $existingUser['email'];
        $_SESSION['name'] = $existingUser['name'];
        $_SESSION['role'] = $existingUser['role'];
        
        return $existingUser ?: ["error" => "Failed to login"];
    }

    public function logout()
    {
        if (isset($_COOKIE['remember_me'])) {
            setcookie("remember_me", "", time() - 3600, "/", "", false, true);
        }

        session_destroy();
    }
}
