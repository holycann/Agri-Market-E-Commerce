<?php

require_once __DIR__ . '/../core/BaseController.php';
require_once __DIR__ . '/../services/UserService.php';
require_once __DIR__ . '/../repositories/UserRepository.php';
class AuthController extends BaseController
{
    private $userService;
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->userService = new UserService(new UserRepository());
    }

    public function login()
    {
        // Menampilkan halaman utama dengan daftar data
        $this->json(['message' => 'Login']);
    }

    public function register()
    {
        // Menampilkan detail berdasarkan ID
        $this->json(['message' => 'Register']);
    }

    public function logout()
    {
        if ($this->request->isPost()) {
            $data = $this->request->getBody();
            // TODO: Simpan data ke database atau lakukan proses lainnya
            
            $this->json(['message' => 'Logout']);
        }

        $this->json(['message' => 'Invalid request'], 400);
    }
}
