<?php
require_once __DIR__ . '/../migration.php';

function migrate_payments_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS payments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        order_id INT,
        payment_method ENUM('credit_card', 'paypal', 'bank_transfer', 'cash_on_delivery') NOT NULL,
        status ENUM('pending', 'successful', 'failed') NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("payments", $sql);
}

function migrate_payments_down(Migration $migration)
{
    $migration->down("payments");
}