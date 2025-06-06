<?php

require_once __DIR__ . '/Database.php';

/**
 * Insere uma nova notícia no banco de dados.
 *
 * @param string $description A descrição da notícia.
 * @param string $author O autor da notícia.
 * @param string $title O título da notícia.
 * @param string $category A categoria da notícia.
 * @return bool Retorna true se a inserção for bem-sucedida, false caso contrário.
 */
function createNews($description, $author, $title, $category) {
    try {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO news (description, author, title, category, access) VALUES (:description, :author, :title, :category, :access)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':category', $category);
        $access = 0;
        $stmt->bindParam(':access', $access, PDO::PARAM_INT);

        return $stmt->execute();

    } catch (PDOException $e) {
        echo "Erro ao inserir notícia: " . $e->getMessage();
        return false;
    }
}

?> 