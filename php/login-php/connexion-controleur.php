<?php

session_save_path('/tmp');
session_start();
require __DIR__ . '/modele.php';

$erreur = '';


if (!empty($_SESSION['utilisateur'])) {
    header('Location: ../../index.php');
    exit;
}


if (!empty($_POST)) {

    if (empty($_POST['email']) || empty($_POST['password'])) {
        $erreur = 'Remplis les deux champs.';

    } elseif ($_POST['email'] === $emailAutorise && $_POST['password'] === $motDePasseAutorise) {
        $_SESSION['utilisateur'] = $emailAutorise;

       header('Location: ../../index.php');
        exit; 

    } else {
        $erreur = 'Email ou mot de passe incorrect.';
    }
}
