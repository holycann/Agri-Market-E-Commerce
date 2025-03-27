<?php
require_once __DIR__ . '/../migration.php';

function migrate_order_items_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS order_items (
        id INT AUTO_INCREMENT PRIMARY KEY,
        order_id INT,
        product_id INT,
        quantity INT NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("order_items", $sql);
}

function migrate_order_items_down(Migration $migration)
{
    $migration->down("order_items");
}