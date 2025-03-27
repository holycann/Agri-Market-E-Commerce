<?php 
return <<<PHP
<?php

require_once __DIR__ . '/../repositories/{{repositoryName}}.php';

class {{className}} extends BaseService
{
    public function __construct({{repositoryName}} \$repository)
    {
        parent::__construct(\$repository);
    }

    // Mendapatkan semua data
    public function getAllData()
    {
        return \$this->getAll();
    }

    // Mendapatkan data berdasarkan ID
    public function getDataById(int \$id)
    {
        return \$this->getById(\$id);
    }

    // Menambahkan data baru
    public function createNewData(array \$data)
    {
        return \$this->createData(\$data);
    }

    // Memperbarui data berdasarkan ID
    public function updateExistingData(int \$id, array \$data)
    {
        return \$this->updateData(\$id, \$data);
    }

    // Menghapus data berdasarkan ID
    public function removeData(int \$id)
    {
        return \$this->deleteData(\$id);
    }
}

PHP;
