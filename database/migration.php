<?php

class Migration
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function up(string $table, string $sql): void
    {
        try {
            $this->pdo->exec($sql);
            echo "✅ Table `$table` successfully created!\n";
        } catch (PDOException $e) {
            echo "❌ Failed to create table `$table`: " . $e->getMessage() . "\n";
        }
    }

    public function down(string $table): void
    {
        try {
            $this->pdo->exec("DROP TABLE IF EXISTS $table");
            echo "✅ Table `$table` successfully dropped!\n";
        } catch (PDOException $e) {
            echo "❌ Failed to drop table `$table`: " . $e->getMessage() . "\n";
        }
    }
}
