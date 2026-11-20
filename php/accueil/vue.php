<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DjikoStream - Accueil</title>
    <?php foreach (['variables', 'typography', 'base', 'components', 'home', 'catalogue', 'cartes-dynamiques'] as $css): ?>
        <link rel="stylesheet" href="css/<?= $css ?>.css">
    <?php endforeach; ?>
</head>
<body id="estAccueil">
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="index.php" aria-label="Accueil DjikoStream">
                <div class="brand-logo"><span>Djiko</span><span>Stream</span></div>
                <p class="brand-tagline">Films • Séries • Univers à découvrir</p>
            </a>
            <nav class="navigation" aria-label="Navigation principale">
                <a class="navigation-link is-active" href="index.php">Accueil</a>
                <a class="navigation-link" href="tendances.html">Tendances</a>
                <a class="navigation-link" href="films.html">Films</a>
                <a class="navigation-link" href="series.html">Séries</a>
                <a class="navigation-link" href="a-propos.html">À propos</a>
                <a class="navigation-link" href="php/login-php/deconnexion.php">Déconnexion</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="filters-toolbar">
            <details class="filter-dropdown">
                <summary class="filter-button">
                    <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 7h16"/><path d="M7 12h10"/><path d="M10 17h4"/>
                    </svg>
                    <span>Filtres</span>
                </summary>
                <div class="filter-panel">
                    <label for="filtre-genre">Filtrer par genre</label>
                    <select id="filtre-genre">
                        <option value="all">Tous les genres</option>
                        <option value="28">Action</option><option value="12">Aventure</option>
                        <option value="35">Comédie</option><option value="18">Drame</option>
                        <option value="14">Fantastique</option><option value="27">Horreur</option>
                        <option value="878">Science-fiction</option><option value="53">Thriller</option>
                    </select>
                </div>
            </details>
        </div>

        <section class="hero">
            <div class="hero-content">
                <p class="hero-kicker">Catalogue streaming</p>
                <h1>Quel film ou quelle série veux-tu découvrir ?</h1>
                <p class="hero-description">Films cultes, nouvelles sorties, séries incontournables : trouve simplement ta prochaine histoire à regarder.</p>
                <div class="search-block">
                    <form class="search-form" id="search-form">
                        <label class="visually-hidden" for="search-input">Rechercher un film ou une série</label>
                        <input class="search-input" id="search-input" type="search" placeholder="Rechercher un film ou une série..." autocomplete="off">
                        <button class="search-button" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="search-results-section" id="search-results-section">
            <div class="container">
                <div class="section-header">
                    <div><h2>Résultats de recherche</h2><p>Les résultats correspondant à votre recherche apparaîtront ici.</p></div>
                </div>
                <div class="media-grid" id="search-results"></div>
            </div>
        </section>

        <!-- Une seule section et une seule carte HTML : foreach les répète avec le modèle. -->
        <?php foreach ($rubriques as $rubrique): ?>
            <section class="home-section">
                <div class="container">
                    <div class="section-header">
                        <div>
                            <h2><?= htmlspecialchars($rubrique['titre']) ?></h2>
                            <p><?= htmlspecialchars($rubrique['description']) ?></p>
                        </div>
                        <?php if ($rubrique['lien'] !== ''): ?>
                            <a class="section-link" href="<?= htmlspecialchars($rubrique['lien']) ?>">Voir plus →</a>
                        <?php endif; ?>
                    </div>
                    <div class="media-grid" <?php if ($rubrique['grille'] !== ''): ?>id="<?= htmlspecialchars($rubrique['grille']) ?>"<?php endif; ?>>
                        <?php foreach ($rubrique['cartes'] as $carte): ?>
                            <article class="media-card">
                                <div class="poster-container">
                                    <img class="media-poster" <?php if ($carte['image'] !== ''): ?>src="<?= htmlspecialchars($carte['image']) ?>" <?php endif; ?>alt="<?= htmlspecialchars($carte['alt']) ?>">
                                </div>
                                <div class="media-card-content">
                                    <h3><?= htmlspecialchars($carte['titre']) ?></h3>
                                    <p class="media-meta"><?= htmlspecialchars($carte['meta']) ?></p>
                                    <span class="media-badge"><?= htmlspecialchars($carte['categorie']) ?></span>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        
<section class="home-section">
    <div class="container">

        <div class="section-header">
            <div>
                <h2><?= htmlspecialchars($monCatalogue['titre']) ?></h2>
                <p><?= htmlspecialchars($monCatalogue['description']) ?></p>
            </div>
        </div>

        <div class="media-grid">
            <?php require __DIR__ . '/mvc/view-oeuvre/oeuvre.php'; ?>
        </div>

    </div>
</section>
                                        

    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>Votre prochaine histoire commence ici.</p>
            <p>© 2026 DjikoStream</p>
        </div>
    </footer>
    <!-- Modèle conservé pour les cartes créées par le JavaScript existant. -->
    <template id="modele-carte-media">
        <article class="media-card">
            <div class="poster-container"><img class="media-poster" alt=""></div>
            <div class="media-card-content">
                <h3></h3><p class="media-meta"></p><span class="media-badge"></span>
            </div>
        </article>
    </template>
    <script src="js/config.js"></script>
    <script src="js/variables.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
