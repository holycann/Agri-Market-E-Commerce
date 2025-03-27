<?php

require_once __DIR__ . '/../core/BaseController.php';

class UserController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
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
            // TODO: Simpan data ke database
            $this->json(['message' => 'Data berhasil disimpan', 'data' => $data]);
        }

        $this->json(['error' => 'Invalid request'], 400);
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
}
