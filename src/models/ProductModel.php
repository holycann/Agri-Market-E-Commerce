<?php

require_once __DIR__ . '/../core/BaseModel.php';

class ProductModel extends BaseModel
{
    public int $id;
    public int $vendor_id;
    public string $name;
    public string $description;
    public string $category;
    public string $price;
    public int $stock_quantity;
    public string $unit;
    public string $status;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}
