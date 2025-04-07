<?php
require_once __DIR__ . '/DatabaseConnection.php';

abstract class BaseRepository
{
    protected $db;
    protected $table;
    protected function __construct($table)
    {
        $this->db = DatabaseConnection::connect();
        $this->table = $table;
    }

    protected function query($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);

        if ($params) {
            $stmt->execute($params);
        } else {
            $stmt->execute();
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function queryOne($sql, $params = [])
    {
        $stmt = $this->db->prepare($sql);

        $stmt->execute($params);

        if (str_contains($sql, "INSERT")) {
            return $this->db->lastInsertId();
        } else if (str_contains($sql, "UPDATE")) {
            return $stmt->rowCount();
        } else if (str_contains($sql, "DELETE")) {
            return $stmt->rowCount();
        } else {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }

    protected function all()
    {
        $sql = "SELECT * FROM $this->table";
        return $this->query($sql);
    }

    protected function findById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        return $this->queryOne($sql, ["id" => $id]);
    }

    protected function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        return $this->queryOne($sql, ["id" => $id]);
    }

    protected function insert($data)
    {
        $columns = implode(", ", array_keys($data));

        $placeholders = implode(", ", array_map(function ($key) {
            return ":$key";
        }, array_keys($data)));

        $values = array_map(function ($key) use ($data) {
            return $data[$key];
        }, array_keys($data));

        $sql = "INSERT INTO $this->table ($columns) VALUES ($placeholders)";

        return $this->queryOne($sql, $data);
    }


    protected function update($id, $data)
    {
        $setClause = implode(", ", array_map(fn($col) => "$col = ?", array_keys($data)));
        $types = str_repeat("s", count($data)) . "i";
        $values = array_values($data);
        $values[] = $id;

        $sql = "UPDATE $this->table SET $setClause WHERE id = ?";
        return $this->query($sql, array_merge([$types], $values));
    }
}
