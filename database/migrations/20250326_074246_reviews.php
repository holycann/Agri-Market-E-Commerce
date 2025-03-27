<?php
require_once __DIR__ . '/../migration.php';

function migrate_reviews_up(Migration $migration)
{
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS reviews (
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id INT,
        product_id INT,
        rating INT CHECK (rating BETWEEN 1 AND 5),
        review_text TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE SET NULL,
        FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
    ) ENGINE=INNODB;
    SQL;

    $migration->up("reviews", $sql);
}

function migrate_reviews_down(Migration $migration)
{
    $migration->down("reviews");
}