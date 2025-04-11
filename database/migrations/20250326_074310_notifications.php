<?php
require_once __DIR__ . '/../migration.php';

function migrate_notifications_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS notifications (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT,
        message TEXT NOT NULL,
        type ENUM('order_update', 'promotion', 'system_alert') NOT NULL,
        is_read BOOLEAN DEFAULT FALSE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("notifications", $sql);
}

function migrate_notifications_down(Migration $migration)
{
    $migration->down("notifications");
}