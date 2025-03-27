<?php

$baseDirectory = __DIR__ . '/../';

// Ambil input dari terminal
$type = $argv[1] ?? null;  // Jenis file (controller, model, migration, etc.)
$dir = $argv[2] ?? null;   // Direktori tujuan, misal: src/controllers
$filename = $argv[3] ?? null; // Nama file tanpa ekstensi, misal: UserController

if (!$type || !$dir || !$filename) {
    die("❌ Please provide file type, directory, and filename!\nUsage: php utils/create.php jenis dir file_name\n");
}

// Pastikan folder tujuan ada
$typeDirectory = "{$baseDirectory}{$dir}";
if (!is_dir($typeDirectory)) {
    mkdir($typeDirectory, 0777, true);
}

// Path template berada di utils/templates/
$templatePath = __DIR__ . "/templates/{$type}_template.php";

// Cek apakah template tersedia
if (!file_exists($templatePath)) {
    die("❌ Template for '{$type}' not found at '{$templatePath}'!\n");
}

// Ambil nama class tanpa ekstensi
$className = pathinfo($filename, PATHINFO_FILENAME);

// Khusus untuk migration, tambahkan timestamp
if ($type === 'migration') {
    $timestamp = date('Ymd_His');
    $filePath = "{$typeDirectory}/{$timestamp}_" . $filename . '.php';
} else {
    $filePath = "{$typeDirectory}/" . ucfirst($className) . '.php';
}

// Gunakan include untuk mendapatkan isi template
$template = include($templatePath);
$template = str_replace('{{className}}', $className, $template);

// Tulis file dengan template yang sudah diproses
file_put_contents($filePath, $template);
echo "✅ File created: $filePath\n";
