<?php
require_once __DIR__ . '/../migration.php';

function migrate_users_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        phone VARCHAR(20) UNIQUE NOT NULL,
        role ENUM('admin', 'vendor', 'customer', 'staff') NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NULL
    ) ENGINE=INNODB;
    SQL;

    $migration->up("users", $sql);
}

function migrate_users_down(Migration $migration)
{
    $migration->down("users");
}