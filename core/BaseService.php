<?php

abstract class BaseService
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    // Ambil semua data
    public function getAll()
    {
        return $this->repository->getAll();
    }

    // Ambil satu data berdasarkan ID
    public function getById($id)
    {
        if (!$id || !is_numeric($id)) {
            return ["error" => "ID tidak valid"];
        }
        return $this->repository->getById($id);
    }

    // Tambah data baru (insert)
    public function createData($data)
    {
        if (empty($data)) {
            return ["error" => "Data tidak boleh kosong"];
        }
        return $this->repository->insert($data);
    }

    // Update data berdasarkan ID
    public function updateData($id, $data)
    {
        if (!$id || !is_numeric($id)) {
            return ["error" => "ID tidak valid"];
        }
        if (empty($data)) {
            return ["error" => "Data update tidak boleh kosong"];
        }
        return $this->repository->update($id, $data);
    }

    // Hapus data berdasarkan ID
    public function deleteData($id)
    {
        if (!$id || !is_numeric($id)) {
            return ["error" => "ID tidak valid"];
        }
        return $this->repository->delete($id);
    }
}
