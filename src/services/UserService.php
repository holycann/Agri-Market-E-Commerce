<?php

require_once __DIR__ . '/../../core/BaseService.php';
require_once __DIR__ . '/../repositories/UserRepository.php';

class UserService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new UserRepository());
    }

    public function getUserByEmail(string $email): UserModel | array | null
    {
        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return null;
        }

        // Fetch user by email
        $user = $this->repository->findByEmail($email);
        

        return $user ? $user->toArray() : null;
    }

    /**
     * Create a new user in the database.
     *
     * @param array $data User data to be inserted.
     * @return UserModel|array The created UserModel or an error message.
     */

    public function createNewData(array $data): UserModel|array
    {
        // Validate email format
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return ["error" => "Invalid email format"];
        }

        // Check if email is already registered
        $existingUser = $this->repository->findByEmail($data['email']);
        if ($existingUser) {
            return ["error" => "Email already registered"];
        }

        // Hash the password for security
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        unset($data['confirm_password']); // Ensure confirm_password is not stored
        $data['role'] = 'customer';
        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = null;

        // Create the user in the database and return the created UserModel
        $newUser = $this->repository->insertData($data)->toArray();

        return $newUser ?: ["error" => "Failed to save user"];
    }
}
