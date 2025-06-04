<?php

require_once __DIR__ . '/Database.php';

class NewsRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAllNews(): array
    {
        $stmt = $this->db->query("SELECT * FROM News");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

} 