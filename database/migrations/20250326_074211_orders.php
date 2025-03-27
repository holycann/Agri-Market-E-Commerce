<?php
require_once __DIR__ . '/../migration.php';

function migrate_orders_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS orders (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id INT,
        total_price DECIMAL(10,2) NOT NULL,
        status ENUM('pending', 'paid', 'shipped', 'completed', 'canceled') NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE SET NULL
    ) ENGINE=INNODB;
    SQL;

    $migration->up("orders", $sql);
}

function migrate_orders_down(Migration $migration)
{
    $migration->down("orders");
}