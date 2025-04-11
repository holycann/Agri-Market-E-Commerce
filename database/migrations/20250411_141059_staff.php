<?php

require_once __DIR__ . '/../migration.php';

function migrate_staff_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS staff (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        position VARCHAR(50) NOT NULL,
        department VARCHAR(50) NOT NULL,
        hire_date DATE NOT NULL,
        status ENUM('active', 'inactive') DEFAULT 'active',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("staff", $sql);
}

function migrate_staff_down(Migration $migration)
{
    $migration->down("staff");
}