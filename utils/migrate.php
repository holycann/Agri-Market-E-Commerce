<?php

require_once __DIR__ . '/../core/DatabaseConnection.php';
require_once __DIR__ . '/../database/migration.php';

$pdo = DatabaseConnection::connect();
$migration = new Migration($pdo);

// Ambil semua file dalam folder migrations, lalu urutkan berdasarkan nama file (timestamp)
$migrations = glob(__DIR__ . '/../database/migrations/*.php');
natsort($migrations); // Urutkan file secara natural

$action = $argv[1] ?? 'up';

try {
    if ($action === 'up') {
        foreach ($migrations as $file) {
            require_once $file;

            // Ambil nama file tanpa ekstensi
            $filename = pathinfo($file, PATHINFO_FILENAME);

            // Pecah berdasarkan underscore (_)
            $parts = explode('_', $filename);
            $count = count($parts);

            // Ambil nama tabel berdasarkan jumlah bagian
            if ($count >= 4) {
                // Jika ada 4 bagian, ambil dua terakhir
                $table_name = $parts[$count - 2] . '_' . $parts[$count - 1];
            } else {
                // Jika hanya 3 bagian, ambil bagian terakhir
                $table_name = $parts[$count - 1];
            }

            // Buat nama fungsi sesuai pola "migrate_{table_name}_up"
            $function_name = 'migrate_' . $table_name . '_up';

            if (function_exists($function_name)) {
                $function_name($migration); // Panggil fungsi migrasi
            } else {
                echo "⚠️ Function `$function_name` not found in $file\n";
            }
        }

    } elseif ($action === 'down') {
        foreach (array_reverse($migrations) as $file) {
            require_once $file;

            // Ambil nama file tanpa ekstensi
            $filename = pathinfo($file, PATHINFO_FILENAME);

            // Pecah berdasarkan underscore (_)
            $parts = explode('_', $filename);
            $count = count($parts);

            // Ambil nama tabel berdasarkan jumlah bagian
            if ($count >= 4) {
                // Jika ada 4 bagian, ambil dua terakhir
                $table_name = $parts[$count - 2] . '_' . $parts[$count - 1];
            } else {
                // Jika hanya 3 bagian, ambil bagian terakhir
                $table_name = $parts[$count - 1];
            }

            // Buat nama fungsi sesuai pola "migrate_{table_name}_down"
            $function_name = 'migrate_' . $table_name . '_down';

            if (function_exists($function_name)) {
                $function_name($migration); // Panggil fungsi migrasi
            } else {
                echo "⚠️ Function `$function_name` not found in $file\n";
            }
        }

    }

    echo "✅ All migrations executed successfully!\n";
} catch (PDOException $e) {
    die("❌ Failed to execute migrations: " . $e->getMessage());
}