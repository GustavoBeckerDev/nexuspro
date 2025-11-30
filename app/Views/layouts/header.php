<?php

use App\Core\Auth;

$logoPath = $baseUrl . "/public/imagens/nexuspro-castle.png";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <!-- CSS DOS LAYOUTS -->
    <link rel="stylesheet" href="<?= url_to('/public/assets/header.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/footer.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/modals.css') ?>">

    <!-- CSS DAS PÁGINAS PÚBLICAS -->
    <link rel="stylesheet" href="<?= url_to('/public/assets/home.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/vagas.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/about.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/contato.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/planos.css') ?>">

    <!-- CSS DAS PÁGINAS DO DASHBOARD -->
    <link rel="stylesheet" href="<?= url_to('/public/assets/dashboard/home.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/dashboard/vagas.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/dashboard/perfil.css') ?>">
    <link rel="stylesheet" href="<?= url_to('/public/assets/dashboard/perfil-edit.css') ?>">

    <!-- FONTES E ÍCONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- ESTILIZAÇÃO TERMOS DE USO -->
     <link rel="stylesheet" href="<?= url_to('/public/assets/termouso.css') ?>">
   
 <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&family=Orbitron:wght@400;700;900&family=Sansation:wght@300;400;700&family=Source+Serif+4:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<!-- adicionamos o data-page para o CSS saber qual link destacar -->

<body data-page="<?= $page ?? '' ?>">
    <header class="header-pixel">
        <div class="header-particles"></div>

        <div class="header-content">
            <div class="logo-container-pixel">
                <div class="logo-frame">
                    <img src="<?= $logoPath ?>" alt="Logo VD Vagas">
                </div>
                <div class="logo-glow"></div>
            </div>

            <?php if (!Auth::check()): ?>

                <nav class="nav-pixel">

                    <a href="<?= url_to('/') ?>" class="nav-link">
                        <i class="fas fa-home link-icon"></i>
                        <span class="link-text">INICIO</span>
                    </a>
                    <a href="<?= url_to('/vagas') ?>" class="nav-link">
                        <i class="fas fa-briefcase link-icon"></i>
                        <span class="link-text">VAGAS</span>
                    </a>
                    <a href="<?= url_to('/about') ?>" class="nav-link">
                        <i class="fas fa-info-circle link-icon"></i>
                        <span class="link-text">SOBRE</span>
                    </a>
                    <a href="<?= url_to('/contato') ?>" class="nav-link">
                        <i class="fas fa-envelope link-icon"></i>
                        <span class="link-text">CONTATO</span>
                    </a>
                    <a href="<?= url_to('/planos') ?>" class="nav-link">
                        <i class="fas fa-star link-icon"></i>
                        <span class="link-text">PLANOS</span>
                    </a>

                </nav>
                <div class="header-buttons-pixel">
                    <button class="btn-pixel-header btn-login-pixel">
                        <i class="fas fa-sign-in-alt btn-icon"></i>
                        <span>LOGIN</span>
                    </button>
                    <button class="btn-pixel-header btn-signup-pixel">
                        <i class="fas fa-user-plus btn-icon"></i>
                        <span>CADASTRO</span>
                    </button>
                </div>

            <?php else: ?>

                <!-- Navegação para usuário autenticado -->
                <nav class="user-nav-pixel" aria-label="Área do usuário autenticado">
                    <a href="<?= url_to('/dashboard/home') ?>" class="auth-link">
                        <i class="fas fa-home link-icon"></i>
                        <span class="link-text">INICIO</span>
                    </a>
                    <a href="<?= url_to('/dashboard/vagas') ?>" class="auth-link">
                        <i class="fas fa-briefcase link-icon"></i>
                        <span class="link-text">VAGAS</span>
                    </a>
                    <a href="<?= url_to('/dashboard/perfil') ?>" class="auth-link">
                        <i class="fas fa-user-circle link-icon"></i>
                        <span class="link-text">PERFIL</span>
                    </a>

                </nav>

                <!-- Controles do usuário (canto direito) -->
                <div class="auth-controls-pixel">
                    <a href="<?= url_to('/auth/logout') ?>" class="btn-pixel-header btn-logout-pixel" title="Sair" aria-label="Sair">
                        <i class="fas fa-sign-out-alt btn-icon" aria-hidden="true"></i>
                    </a>
                </div>

            <?php endif ?>


        </div>

        <div class="header-bottom-gradient"></div>
    </header>

    <!-- Inclui os modais globais -->
    <?php include __DIR__ . '/modals.php'; ?>
    <!-- JS centralizado para modais -->
    <script src="<?= $baseUrl ?>/public/assets/modals.js"></script>