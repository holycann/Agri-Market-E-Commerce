<?php

require_once __DIR__ . '/../../core/BaseModel.php';

class StaffModel extends BaseModel
{
    public int $id;
    public int $staff_id;
    public string $position;
    public string $department;
    public string $hire_date;
    public string $status;
    public string $created_at;
    public ?string $updated_at;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}
