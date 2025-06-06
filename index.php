<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Portal de notícias do Nordeste 1 - Notícias do Brasil, Paraíba, Política, Esportes e mais">
    <link rel="icon" type="image/svg+xml" href="assets/images/logo/ne11-01.svg">
    <link rel="apple-touch-icon" href="assets/images/logo/ne11-01.svg">
    <title>Nordeste 1 - Portal de Notícias</title>
    <link rel="stylesheet" href="/assets/styles/main.css">
    <script defer src="assets/scripts/main.js"></script>
</head>

<body>
    <header class="header" role="banner">
        <div class="header__logo">
            <a href="/" aria-label="Página inicial">
                <img src="assets/images/logo/ne11-01.svg" alt="Logo Nordeste 1" width="120" height="40">
            </a>
        </div>
        <nav class="header__nav" role="navigation" aria-label="Menu principal">
            <div class="nav__fixed" aria-hidden="true">
                <span class="nav__item">Futebol</span>
            </div>
            <ul class="nav__list">
                <li><a href="/inicio" class="nav__item">Início</a></li>
                <li><a href="/revista" class="nav__item">Revista</a></li>
                <li><a href="/brasil" class="nav__item selected" aria-current="page">futebol</a></li>
                <li><a href="/paraiba" class="nav__item">Paraíba</a></li>
                <li><a href="/cidades" class="nav__item">Cidades</a></li>
                <li><a href="/politicas" class="nav__item">Políticas</a></li>
                <li><a href="/esportes" class="nav__item">Esportes</a></li>
                <li><a href="/policia" class="nav__item">Policia</a></li>
                <li><a href="/internacional" class="nav__item">Internacional</a></li>
            </ul>
        </nav>
        <div class="header__search">
            <button class="search__button" aria-label="Abrir pesquisa">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="search__icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <div class="search__overlay">
                <div class="search__content">
                    <div class="search__header">
                        <h2>Pesquisar</h2>
                        <button class="search__close" aria-label="Fechar pesquisa">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="close__icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="search__input-wrapper">
                        <input type="text" class="search__input" placeholder="Digite sua pesquisa..."
                            aria-label="Campo de pesquisa">
                        <button class="search__submit" aria-label="Pesquisar">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="search__icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                    <button class="search__action-button">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="container-main">

        <ul class="container-new-update">
            <div class="container-news-text">
                <li class="news-text">New Updates:</li>
            </div>
            <div class="news-wrapper">
                <li class="news">Lorem ipsum dolor sit amet.</li>
                <li class="news">Lorem ipsum dolor sit amet.</li>
                <li class="news">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                <li class="news">Lorem ipsum dolor sit amet.</li>
                <li class="news">Lorem ipsum dolor sit amet.</li>
                <li class="news">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
            </div>
        </ul>

        <div class="main-layout">
            <section id="main-section">
                <div class="news-container">
                    <img src="assets/images/news/noticia1.jpg" alt="Noticia 1">
                    <div class="news-content">
                        <div class="new-top">
                            <div>
                                <button class="button">Revista</button>
                            </div>
                            <div>
                                <p>40 minutos</p>
                            </div>
                        </div>
                        <p class="news-tittle">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione, sapiente? Distinctio,
                            quas.
                            Eum.
                        </p>
                    </div>
                </div>
            </section>
            <div class="grid-container">
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="top-news">
            <div class="container-top">
                <div>
                    <h2>Melhores notícias</h2>
                </div>
                <div>
                    <a class="link-veja-mais" href="/noticias">
                        <p>Veja mais</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12h17M12 5l7 7-7 7" stroke-dasharray="0 0 0 0" />
                            <path d="M19 12l-7 7" stroke-width="1" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="container-recents-news">
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
                <div class="sub-news">
                    <img src="assets/images/news/noticia1.jpg" alt="Imagem da notícia">
                    <div class="text-content">
                        <div class="author-time">
                            <span>• 6 minutes ago</span>
                        </div>
                        <div class="headline">
                            NBA players give back in local charity event
                        </div>
                        <div class="snippet">
                            The phrase "give back" implies that the players are showing gratitude or a sense of <a
                                href="#" class="read-more">read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="recent-news">
            <div class="container-top">
                <div>
                    <h2>Futebol</h2>
                </div>
                <div>
                    <a class="link-veja-mais" href="/noticias">
                        <p>Veja mais</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12h17M12 5l7 7-7 7" stroke-dasharray="0 0 0 0" />
                            <path d="M19 12l-7 7" stroke-width="1" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="news-main-recents">
                <div class="news-contents">
                    <div class="image-main">
                        <img src="assets/images/ancelloti.webp" alt="Noticia 1">
                    </div>
                    <div class="card">
                        <div>
                            <div class="author">
                                <img src="assets/images/avatars/avatar-mock.png" alt="Avatar">
                                Globo Esporte · há 8 minutos
                            </div>
                            <div class="headline">
                                Ancelotti estreia com empate e preocupa torcida brasileira
                            </div>
                            <div class="content">
                                A manchete "Ancelotti estreia com empate e preocupa torcida brasileira" destaca o
                                desempenho da Seleção sob o comando do novo técnico. Em sua estreia oficial, Ancelotti
                                viu a equipe empatar em 0 a 0 com o Equador, em um jogo marcado por pouca criatividade
                                ofensiva e dificuldades na construção das jogadas. O resultado abaixo das expectativas
                                gerou dúvidas sobre o preparo da equipe para os próximos desafios nas Eliminatórias.
                            </div>
                        </div>

                        <div class="footer">
                            <span>NBA Global Games</span> · 15 min read
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-recent-news">
                <div class="news-main-recents">
                    <div class="news-contents">
                        <div class="image-main">
                            <img src="assets/images/ancelotti.webp" alt="Notícia 1">
                        </div>
                        <div class="card">
                            <div>
                                <div class="author">
                                    <img src="assets/images/avatars/avatar-mock.png" alt="Avatar">
                                    <strong class="name-author">GE Brasil</strong><span class="time"> · há 8
                                        minutos</span>
                                </div>
                                <div class="headline">
                                    Richarlison brilha em amistoso e garante vitória da Seleção
                                </div>
                            </div>
                            <div class="footer">
                                <span>Seleção Brasileira</span> · leitura de 3 min
                            </div>
                        </div>
                    </div>

                    <div class="news-contents">
                        <div class="image-main">
                            <img src="assets/images/richarlyson.jpg" alt="Notícia 2">
                        </div>
                        <div class="card">
                            <div>
                                <div class="author">
                                    <img src="assets/images/avatars/avatar-mock.png" alt="Avatar">
                                    <strong class="name-author">UOL Esporte</strong><span class="time"> · há 8
                                        minutos</span>
                                </div>
                                <div class="headline">
                                    Ancelotti testa nova formação para a Copa América
                                </div>
                            </div>
                            <div class="footer">
                                <span>Seleção Brasileira</span> · leitura de 4 min
                            </div>
                        </div>
                    </div>

                    <div class="news-contents">
                        <div class="image-main">
                            <img src="assets/images/selecao.jpg" alt="Notícia 3">
                        </div>
                        <div class="card">
                            <div>
                                <div class="author">
                                    <img src="assets/images/avatars/avatar-mock.png" alt="Avatar">
                                    <strong class="name-author">Folha Esportiva</strong><span class="time"> · há 8
                                        minutos</span>
                                </div>
                                <div class="headline">
                                    Seleção intensifica treinos em Orlando antes do torneio
                                </div>
                            </div>
                            <div class="footer">
                                <span>Seleção Brasileira</span> · leitura de 5 min
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>