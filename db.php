<?php

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/NewsRepository.php';

function conexaoDB(){
    try{
        $connection = new PDO("mysql:host=127.0.0.1;port=5434;dbname=portal", "eric", "azul20264552");
        return $connection;
    }catch(PDOException $error){
        echo $error->getMessage();
    }
}

function mostrarTable(PDO $conn){
    $stmt = $conn->query("SELECT * FROM News");
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($resultados as $new)
    {
        echo "<div class='news-container'>
        <div>
            <img class='news-image' src='{$new['imagem_url']}' alt='Noticia 1'>
        </div>
        <div class='new-text-container'>
            <div>
                <p class='time-post'>10 minutos</p>
            </div>
            <div>
                <p class='new-text-tittle'>{$new['title']}</p>
            </div>
            <div class='description-container'>
                <p class='description-text'>{$new['description']}<strong
                        class='special-mark'> leia mais...</strong></p>
            </div>
        </div>
    </div>";
    }
}

$conn = conexaoDB();
mostrarTable($conn);
