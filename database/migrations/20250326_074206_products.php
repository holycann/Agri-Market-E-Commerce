<?php
require_once __DIR__ . '/../migration.php';

function migrate_products_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        vendor_id INT,
        name VARCHAR(100) NOT NULL,
        description TEXT,
        category VARCHAR(50),
        price DECIMAL(10,2) NOT NULL,
        stock INT DEFAULT 0,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (vendor_id) REFERENCES vendors(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("products", $sql);
}

function migrate_products_down(Migration $migration)
{
    $migration->down("products");
}