<article class="media-card">


    <div class="poster-container">

        <img class="media-poster"
             src="<?= htmlspecialchars($monCatalogue['cartes'][0]['image'],) ?>"
             alt="<?= htmlspecialchars($monCatalogue['cartes'][0]['alt'],) ?>">
    </div>


    <div class="media-card-content">

        <h3><?= htmlspecialchars($topGunMaverick->titre,) ?></h3>

        <p class="media-meta">
            <?= htmlspecialchars($topGunMaverick->genre,) ?> · <?= htmlspecialchars((string) $topGunMaverick->anneeSortie,) ?>
        </p>

        <p class="media-meta">
            Ma note : <?= htmlspecialchars((string) $topGunMaverick->note,) ?> &#9733
        </p>

        <span class="media-badge">
            <?= htmlspecialchars($topGunMaverick->type,) ?>
        </span>

    </div>


</article>
