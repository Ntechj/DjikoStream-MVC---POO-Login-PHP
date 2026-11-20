<?php

require_once __DIR__ . '/../../modele.php';
require_once __DIR__. '/../models-oeuvre/oeuvre.php';

$titre = $monCatalogue['cartes'][0]['titre'];
$type = $monCatalogue['cartes'][0]['categorie'];
$genre = $monCatalogue['cartes'][0]['meta'];

$topGunMaverick = new oeuvre($titre, $type, $genre, 5, 2022);

