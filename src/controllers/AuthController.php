<?php

require_once __DIR__ . '/../../core/BaseController.php';
require_once __DIR__ . '/../services/AuthService.php';
require_once __DIR__ . '/../repositories/UserRepository.php';

class AuthController extends BaseController
{
    private $authService;
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->authService = new AuthService();
    }

    public function login()
    {
        $data = $this->request->getBody();
        $user = $this->authService->login($data);

        if (isset($user['error'])) {
            $this->json(['error' => $user['error']], 400);
        } else {
            if ($user['role'] == 'admin') {
                $this->json(['message' => 'Login successful', 'redirect' => BASE_URL . '/admin']);
            } else if ($user['role'] == 'vendor') {
                $this->json(['message' => 'Login successful', 'redirect' => BASE_URL . '/vendor']);
            } else {
                $this->json(['message' => 'Login successful', 'redirect' => BASE_URL . '/']);
            }
        }
    }

    public function logout()
    {
        if ($this->request->isDelete()) {
            $this->authService->logout();
            $this->json(['message' => 'Logout successful', 'redirect' => BASE_URL . '/login']);
        }

        $this->json(['message' => 'Invalid request'], 400);
    }
}
