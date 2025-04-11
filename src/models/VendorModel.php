<?php

require_once __DIR__ . '/../core/BaseModel.php';

class VendorModel extends BaseModel
{
    public int $id;
    public int $user_id;
    public string $bussiness_name;
    public string $bussiness_address;
    public string $contact_number;
    public string $business_registration_number;
    public string $status;
    public string $created_at;
    public ?string $updated_at;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}
