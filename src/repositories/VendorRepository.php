<?php

require_once __DIR__ . '/BaseRepository.php';

class VendorRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('vendors');
    }

    // Mendapatkan semua data
    public function getAll()
    {
        return $this->all();
    }

    // Mendapatkan data berdasarkan ID
    public function getById($id)
    {
        return $this->findById($id);
    }

    // Menyimpan data baru
    public function insertData($data)
    {
        return $this->insert($data);
    }

    // Memperbarui data berdasarkan ID
    public function updateData($id, $data)
    {
        return $this->update($id, $data);
    }

    // Menghapus data berdasarkan ID
    public function deleteData($id)
    {
        return $this->delete($id);
    }
}
