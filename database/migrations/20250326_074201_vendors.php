<?php
require_once __DIR__ . '/../migration.php';

function migrate_vendors_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS vendors (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT UNIQUE,
        business_name VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("vendors", $sql);
}

function migrate_vendors_down(Migration $migration)
{
    $migration->down("vendors");
}