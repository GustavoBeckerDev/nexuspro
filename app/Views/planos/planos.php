<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fontes Gamificadas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323:wght@400&family=Orbitron:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/planos.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</head>
<body>

<main id="planos" class="planos-main pixel-game">
    <!-- Partículas de fundo -->
    <div class="pixel-particles"></div>

    <!-- HERO SECTION -->
    <section class="hero-planos">
        <div class="hero-container">
            <h1 class="hero-title">
                <img src="<?= $baseUrl ?>/public/imagens/foguete.png" alt="Foguete" class="title-icon">
                PACOTES DE UPGRADE
            </h1>
            <p class="hero-subtitle">
                > Escolha seu nível de acesso e desbloqueie novos recursos_
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <i class="fas fa-star"></i>
                    <span>4 NÍVEIS</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-unlock-alt"></i>
                    <span>RECURSOS</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-crown"></i>
                    <span>PREMIUM</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE PLANOS -->
    <section class="planos-section">
        <div class="section-header">
            <h2 class="section-title">
                <img src="<?= $baseUrl ?>/public/imagens/gold.png" alt="Gold Icon" class="title-gold-icon left">
                SELECIONE SEU PACOTE
                <img src="<?= $baseUrl ?>/public/imagens/gold.png" alt="Gold Icon" class="title-gold-icon right">
            </h2>
        </div>

        <div class="carousel-container">
            <div class="carousel-track">
            <!-- PLANO BÁSICO -->
            <div class="plan-card basic">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="plan-name">BÁSICO</h3>
                    <div class="plan-level">NÍVEL 1</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">4,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Acesso às vagas essenciais</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Publicação de currículo</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte básico</span>
                    </div>
                    <div class="feature-item disabled">
                        <i class="fas fa-times"></i>
                        <span>Candidaturas limitadas</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO AVANÇADO -->
            <div class="plan-card advanced">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3 class="plan-name">AVANÇADO</h3>
                    <div class="plan-level">NÍVEL 2</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">9,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Maior visibilidade do perfil</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Mais candidaturas por mês</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Alertas personalizados</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte prioritário</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO PREMIUM -->
            <div class="plan-card premium featured">
                <div class="featured-badge">
                    <i class="fas fa-crown"></i>
                    RECOMENDADO
                </div>
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="plan-name">PREMIUM</h3>
                    <div class="plan-level">NÍVEL 3</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">19,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Candidaturas ilimitadas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Perfil em destaque</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Acesso a vagas exclusivas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte VIP 24/7</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO EMPRESA -->
            <div class="plan-card enterprise">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="plan-name">EMPRESA</h3>
                    <div class="plan-level">NÍVEL MAX</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">29,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Vagas ilimitadas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Gestão personalizada</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Relatórios avançados</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte dedicado</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- CARDS DUPLICADOS PARA LOOP CONTÍNUO -->
            <!-- PLANO BÁSICO (DUPLICADO) -->
            <div class="plan-card basic">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="plan-name">BÁSICO</h3>
                    <div class="plan-level">NÍVEL 1</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">4,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Acesso às vagas essenciais</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Publicação de currículo</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte básico</span>
                    </div>
                    <div class="feature-item disabled">
                        <i class="fas fa-times"></i>
                        <span>Candidaturas limitadas</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO AVANÇADO (DUPLICADO) -->
            <div class="plan-card advanced">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3 class="plan-name">AVANÇADO</h3>
                    <div class="plan-level">NÍVEL 2</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">9,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Maior visibilidade do perfil</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Mais candidaturas por mês</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Alertas personalizados</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte prioritário</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO PREMIUM (DUPLICADO) -->
            <div class="plan-card premium featured">
                <div class="featured-badge">
                    <i class="fas fa-crown"></i>
                    RECOMENDADO
                </div>
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="plan-name">PREMIUM</h3>
                    <div class="plan-level">NÍVEL 3</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">19,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Candidaturas ilimitadas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Perfil em destaque</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Acesso a vagas exclusivas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte VIP 24/7</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            <!-- PLANO EMPRESA (DUPLICADO) -->
            <div class="plan-card enterprise">
                <div class="plan-header">
                    <div class="plan-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="plan-name">EMPRESA</h3>
                    <div class="plan-level">NÍVEL MAX</div>
                </div>
                <div class="plan-price">
                    <span class="currency">R$</span>
                    <span class="amount">29,90</span>
                    <span class="period">/mês</span>
                </div>
                <div class="plan-features">
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Vagas ilimitadas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Gestão personalizada</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Relatórios avançados</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check"></i>
                        <span>Suporte dedicado</span>
                    </div>
                </div>
                <button class="plan-button">
                    <i class="fas fa-download"></i>
                    ASSINAR
                </button>
            </div>

            </div> <!-- Fim carousel-track -->
        </div> <!-- Fim carousel-container -->
    </section>

</main>

</body>
</html>
