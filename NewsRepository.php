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
        $stmt = $this->db->query("SELECT id, title, imagem_url, description, categoria, date_stamp FROM News ORDER BY date_stamp DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT id, title, imagem_url, description, categoria, date_stamp FROM News WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function getLatestNews(int $limit = 5): array
    {
        $stmt = $this->db->prepare("SELECT id, title, imagem_url, description, categoria, date_stamp FROM News ORDER BY date_stamp DESC LIMIT :limit");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsByCategory(string $categoria): array
    {
        $stmt = $this->db->prepare("SELECT id, title, imagem_url, description, categoria, date_stamp FROM News WHERE categoria = :categoria ORDER BY date_stamp DESC");
        $stmt->execute(['categoria' => $categoria]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 