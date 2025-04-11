<?php
require_once __DIR__ . '/../migration.php';

function migrate_products_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        vendor_id INT,
        name VARCHAR(100) NOT NULL,
        description TEXT NOT NULL,
        category ENUM('livestock', 'crops', 'forestry', 'dairy', 'fish', 'miscellaneous') NOT NULL,
        price DECIMAL(10,2) NOT NULL,
        stock_quantity INT NOT NULL,
        unit VARCHAR(20) NOT NULL,
        status ENUM('active', 'inactive') DEFAULT 'active',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (vendor_id) REFERENCES vendors(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("products", $sql);
}

function migrate_products_down(Migration $migration)
{
    $migration->down("products");
}