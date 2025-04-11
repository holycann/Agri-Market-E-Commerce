<?php


require_once __DIR__ . '/../../core/BaseController.php';
require_once __DIR__ . '/../services/UserService.php';

class UserController extends BaseController
{
    private $userService;
    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->userService = new UserService();
    }

    public function index()
    {
        $this->json(['message' => 'Welcome to UserController!']);
    }

    public function show(int $id)
    {
        $this->json(['id' => $id, 'message' => 'Detail data for ID ' . $id]);
    }

    public function store()
    {
        if ($this->request->isPost()) {
            $data = $this->request->getBody();

            $user = $this->userService->createNewData($data);
            if (isset($user['error'])) {
                // If there's an error, return it
                $this->json($user, 400);
            } else {
                // If successful, return the user data
                // $this->json(['message' => 'Data successfully saved', 'data' => $user]);
                $this->json(['message' => 'Data successfully saved', 'redirect' => BASE_URL . '/login']);
            }
        } else {
            // Handle the case where the request method is not POST
            $this->json(['error' => 'Invalid request'], 400);
        }
    }

    public function update(int $id)
    {
        if ($this->request->isPut()) {
            $data = $this->request->getBody();
            // TODO: Update data
            $this->json(['message' => 'Data berhasil diperbarui', 'id' => $id, 'data' => $data]);
        }

        $this->json(['error' => 'Invalid request'], 400);
    }

    public function delete(int $id)
    {
        if ($this->request->isDelete()) {
            // TODO: Hapus data
            $this->json(['message' => "Data dengan ID $id telah dihapus"]);
        }

        $this->json(['error' => 'Invalid request'], 400);
    }

    // Pages
    public function ProfilePage()
    {
        // Menampilkan halaman Account and System Settings
        $this->render('AccountAndSystemSettings/ProfilePage');
    }
    public function UpdateProfilePage()
    {
        // Menampilkan halaman Account and System Settings
        $this->render('AccountAndSystemSettings/UpdateProfilePage');
    }
    public function UpdatePasswordPage()
    {
        // Menampilkan halaman Account and System Settings
        $this->render('AccountAndSystemSettings/UpdatePasswordPage');
    }
}
