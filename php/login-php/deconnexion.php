<?php

session_save_path('/tmp');
session_start();
$_SESSION = [];
session_destroy();

header('Location: ../../register&login/connexion.php');
exit;
