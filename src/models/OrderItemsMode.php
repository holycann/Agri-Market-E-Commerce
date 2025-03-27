<?php

require_once __DIR__ . '/../core/BaseModel.php';

class OrderItemsModel extends BaseModel
{
    public int $id;
    public int $order_id;
    public int $product_id;
    public int $quantity;
    public string $created_at;
    public string $updated_at;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}
