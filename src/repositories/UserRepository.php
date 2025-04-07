<?php

require_once __DIR__ . '/../../core/BaseRepository.php';
require_once __DIR__ . '/../models/UserModel.php';
class UserRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('users');
    }

    public function findByEmail($email): UserModel | bool
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $user = $this->queryOne($sql, ["email" => $email]);
        return $user ? new UserModel($user) : false;
    }

    public function insertData($data): UserModel
    {
        $userId = $this->insert($data);

        $user = $this->findById($userId);

        return new UserModel($user);
    }
}
