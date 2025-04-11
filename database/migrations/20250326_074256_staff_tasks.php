<?php
require_once __DIR__ . '/../migration.php';

function migrate_staff_tasks_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS staff_tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        staff_id INT NOT NULL,
        task_title VARCHAR(255) NOT NULL,
        task_description TEXT NOT NULL,
        status ENUM('pending', 'in_progress', 'completed') DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (staff_id) REFERENCES users(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("staff_tasks", $sql);
}

function migrate_staff_tasks_down(Migration $migration)
{
    $migration->down("staff_tasks");
}