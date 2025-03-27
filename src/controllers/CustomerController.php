<?php

require_once __DIR__ . '/../core/BaseController.php';

class CustomerController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index()
    {
        // Menampilkan halaman utama dengan daftar data
        $this->json(['message' => 'Welcome to CustomerController!']);
    }

    public function show(int $id)
    {
        // Menampilkan detail berdasarkan ID
        $data = ['id' => $id, 'message' => 'Detail data for ID ' . $id];
        $this->json($data);
    }

    public function store()
    {
        if ($this->request->isPost()) {
            $data = $this->request->getBody();
            // TODO: Simpan data ke database atau lakukan proses lainnya
            
            $this->json(['message' => 'Data berhasil disimpan', 'data' => $data]);
        }

        $this->json(['message' => 'Invalid request'], 400);
    }

    public function update(int $id)
    {
        if ($this->request->isPost()) {
            $data = $this->request->getBody();
            // TODO: Update data berdasarkan ID
            
            $this->json(['message' => 'Data berhasil diperbarui', 'id' => $id, 'data' => $data]);
        }

        $this->json(['message' => 'Data tidak ditemukan', 'id' => $id]);
    }

    public function delete(int $id)
    {
        if ($this->request->isPost()) {
            // TODO: Hapus data berdasarkan ID
            
            $this->json(['message' => 'Data berhasil dihapus', 'id' => $id]);
        }

        $this->json(['message' => 'Data tidak ditemukan', 'id' => $id]);
    }
}
