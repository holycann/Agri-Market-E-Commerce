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
            return ["error" => "Invalid ID"];
        }
        return $this->repository->getById($id);
    }

    // Hapus data berdasarkan ID
    public function deleteData($id)
    {
        if (!$id || !is_numeric($id)) {
            return ["error" => "Invalid ID"];
        }
        return $this->repository->delete($id);
    }
}
