<?php 

require __DIR__ . '/../php/login-php/connexion-controleur.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — DjikoStream</title>
    <meta name="description" content="Material Design login form with ripple feedback, elevation and Roboto typography.">
    <meta name="author" content="Aigars Silkalns / Colorlib">
    <link rel="canonical" href="https://puikinsh.github.io/login-forms/forms/material/">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='48' fill='%236366f1'/><text x='50' y='68' font-size='60' text-anchor='middle' fill='white' font-family='system-ui,sans-serif'>L</text></svg>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Material Design Login Form">
    <meta property="og:description" content="Material Design login form with ripple feedback, elevation and Roboto typography.">
    <meta property="og:url" content="https://puikinsh.github.io/login-forms/forms/material/">
    <meta property="og:image" content="https://puikinsh.github.io/login-forms/assets/screenshots/material.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Material Design Login Form">
    <meta name="twitter:description" content="Material Design login form with ripple feedback, elevation and Roboto typography.">
    <meta name="twitter:image" content="https://puikinsh.github.io/login-forms/assets/screenshots/material.png">
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="material-logo">
                    <div class="logo-layers">
                        <div class="layer layer-1"></div>
                        <div class="layer layer-2"></div>
                        <div class="layer layer-3"></div>
                    </div>
                </div>
                <h2>Connexion</h2>
                <p>Connecte-toi à DjikoStream</p>
            </div>
            
            <?php if ($erreur !== '') { ?>
                <p role="alert" style="color: #b91c1c; text-align: center; margin-bottom: 16px;">
                    <?= htmlspecialchars($erreur) ?>
                </p>
            <?php } ?>

            <form class="login-form" id="loginForm" method="post" action="connexion.php" novalidate>
                <div class="form-group">
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" required autocomplete="username" aria-describedby="emailError" autocapitalize="none" spellcheck="false" placeholder=" ">
                        <label for="email">Adresse email</label>
                        <div class="input-line"></div>
                        <div class="ripple-container"></div>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <div class="input-wrapper password-wrapper">
                        <input type="password" id="password" name="password" required autocomplete="current-password" aria-describedby="passwordError" placeholder=" ">
                        <label for="password">Mot de passe</label>
                        <div class="input-line"></div>
                        <div class="ripple-container"></div>
                    </div>
                    <span class="error-message" id="passwordError"></span>
                </div>

<button type="submit" class="login-btn material-btn">
                    <div class="btn-ripple"></div>
                    <span class="btn-text">Se connecter</span>
                    <div class="btn-loader">
                        <svg class="loader-circle" viewBox="0 0 50 50">
                            <circle class="loader-path" cx="25" cy="25" r="12" fill="none" stroke="currentColor" stroke-width="3"/>
                        </svg>
                    </div>
                </button>
            </form>

        </div>
    </div>

</body>
</html>