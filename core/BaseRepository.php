<?php
require_once __DIR__ . '/DatabaseConnection.php';

abstract class BaseRepository
{
    protected $db;
    protected $table;

    public function __construct($table)
    {
        $this->db = DatabaseConnection::connect();
        $this->table = $table;
    }

    protected function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);

        if ($params) {
            $stmt->bindParam(...$params);
        }

        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Ambil semua data
    public function all()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->query($sql);
    }

    // Ambil satu data berdasarkan ID
    public function findById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        return $this->query($sql, ["i", $id]);
    }

    // Hapus data berdasarkan ID
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        return $this->query($sql, ["i", $id]);
    }

    // Insert data baru
    public function insert($data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $types = str_repeat("s", count($data)); // Semua dianggap string untuk simplifikasi
        $values = array_values($data);

        $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";
        return $this->query($sql, array_merge([$types], $values));
    }

    // Update data berdasarkan ID
    public function update($id, $data)
    {
        $setClause = implode(", ", array_map(fn($col) => "$col = ?", array_keys($data)));
        $types = str_repeat("s", count($data)) . "i"; // Tambah "i" untuk ID
        $values = array_values($data);
        $values[] = $id; // Tambahkan ID di akhir

        $sql = "UPDATE $this->table SET $setClause WHERE id = ?";
        return $this->query($sql, array_merge([$types], $values));
    }
}
