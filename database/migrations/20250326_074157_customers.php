<?php
require_once __DIR__ . '/../migration.php';

function migrate_customers_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS customers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNIQUE,
        address TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("customers", $sql);
}

function migrate_customers_down(Migration $migration)
{
    $migration->down("customers");
}