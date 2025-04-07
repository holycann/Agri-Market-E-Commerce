<?php

require_once __DIR__ . '/../../core/BaseModel.php';

class UserModel extends BaseModel
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $role;
    public string $created_at;
    public ?string $updated_at;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}
