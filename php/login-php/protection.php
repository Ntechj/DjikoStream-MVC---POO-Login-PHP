<?php

session_save_path('/tmp');
session_start();

if (empty($_SESSION['utilisateur'])) {
    header('Location: /register&login/connexion.php');
    exit;
}