<?php

require_once __DIR__ . '/Database.php';
require_once __DIR__ . '/NewsRepository.php';

function mostrarTable() {
    $newsRepository = new NewsRepository();
    $resultados = $newsRepository->getAllNews();

    foreach($resultados as $new) {
        echo "<div class='news-container'>
            <div>
                <img class='news-image' src='{$new['imagem_url']}' alt='{$new['title']}'>
            </div>
            <div class='new-text-container'>
                <div>
                    <time class='time-post' datetime='{$new['date_stamp']}'>" . calcularTempoDecorrido($new['date_stamp']) . "</time>
                </div>
                <div>
                    <span class='categoria'>{$new['categoria']}</span>
                    <h3 class='new-text-tittle'>{$new['title']}</h3>
                </div>
                <div class='description-container'>
                    <p class='description-text'>{$new['description']}<a href='/noticia/{$new['id']}' class='special-mark'> leia mais...</a></p>
                </div>
            </div>
        </div>";
    }
}

function calcularTempoDecorrido($data) {
    $agora = new DateTime();
    $dataNoticia = new DateTime($data);
    $diferenca = $agora->diff($dataNoticia);
    
    if ($diferenca->d > 0) {
        return $diferenca->d . ' dias atrás';
    } elseif ($diferenca->h > 0) {
        return $diferenca->h . ' horas atrás';
    } else {
        return $diferenca->i . ' minutos atrás';
    }
}
