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

    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/contato.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/footer.css">
</head>
<body>

<main id="contato" class="contato-main pixel-game">
    <!-- Partículas de fundo -->
    <div class="pixel-particles"></div>

    <!-- HERO SECTION -->
    <section class="hero-contact">
        <div class="hero-container">
            <h1 class="hero-title">
                CANAL DE COMUNICAÇÃO
            </h1>
            <p class="hero-subtitle">
                > Estabeleça conexão com nossa central de comando_
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <i class="fas fa-signal"></i>
                    <span>ONLINE</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>SEGURO</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-rocket"></i>
                    <span>RÁPIDO</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SEÇÃO DE CONTATO -->
    <section class="contact-section">
        <div class="section-header">
            <h2 class="section-title">
                INICIAR TRANSMISSÃO
            </h2>
        </div>

        <div class="contact-container">
            <!-- PAINEL DE TRANSMISSÃO -->
            <div class="transmission-panel">
                <div class="panel-header">
                    <i class="fas fa-broadcast-tower"></i>
                    <span>PAINEL DE TRANSMISSÃO</span>
                    <div class="status-indicator">
                        <div class="status-dot"></div>
                        <span>ATIVO</span>
                    </div>
                </div>
                
                <form class="contact-form pixel-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="name" class="pixel-label">
                            <i class="fas fa-user-astronaut"></i> IDENTIFICAÇÃO
                        </label>
                        <input type="text" id="name" name="name" class="pixel-input" placeholder="Digite seu nome de usuário..." required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="pixel-label">
                            <i class="fas fa-satellite"></i> CANAL DE RETORNO
                        </label>
                        <input type="email" id="email" name="email" class="pixel-input" placeholder="Frequência de comunicação (email)..." required>
                    </div>

                    <div class="form-group">
                        <label for="company" class="pixel-label">
                            <i class="fas fa-building"></i> CORPORAÇÃO [OPCIONAL]
                        </label>
                        <input type="text" id="company" name="company" class="pixel-input" placeholder="Nome da sua organização...">
                    </div>

                    <div class="form-group">
                        <label for="message" class="pixel-label">
                            <i class="fas fa-code"></i> DADOS DA TRANSMISSÃO
                        </label>
                        <textarea id="message" name="message" class="pixel-textarea" placeholder="Codifique sua mensagem aqui..." required></textarea>
                    </div>

                    <button type="submit" class="btn-pixel btn-transmit">
                        <i class="fas fa-paper-plane"></i>
                        TRANSMITIR DADOS
                    </button>
                </form>
            </div>

            <!-- PAINEL DE INFORMAÇÕES -->
            <div class="info-panel">
                <!-- MAPA HOLOGRÁFICO -->
                <div class="holo-map">
                    <div class="map-header">
                        <i class="fas fa-globe-americas"></i>
                        <span>LOCALIZAÇÃO BASE</span>
                    </div>
                    <div class="map-frame">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.9876910566713!2d-51.15222168452768!3d-27.006678882991655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3e47b6d90b2d7%3A0xaaf4472dfc9c2e57!2sVideira%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1696532100000!5m2!1spt-BR!2sbr"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- CANAIS DE COMUNICAÇÃO -->
                <div class="comm-channels">
                    <div class="channels-header">
                        <i class="fas fa-wifi"></i>
                        <span>CANAIS ATIVOS</span>
                    </div>
                    <div class="channel-list">
                        <div class="channel-item">
                            <i class="fas fa-phone-alt"></i>
                            <span class="channel-label">FREQ. VOCAL:</span>
                            <span class="channel-data">(49) 99999-9999</span>
                        </div>
                        <div class="channel-item">
                            <i class="fas fa-envelope-open-text"></i>
                            <span class="channel-label">CANAL DIGITAL:</span>
                            <span class="channel-data">contato@vdvagas.com.br</span>
                        </div>
                        <div class="channel-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="channel-label">COORDENADAS:</span>
                            <span class="channel-data">Videira - SC, Brasil</span>
                        </div>
                    </div>
                </div>

                <!-- REDES SOCIAIS -->
                <div class="social-networks">
                    <div class="networks-header">
                        <i class="fas fa-users-cog"></i>
                        <span>REDES CONECTADAS</span>
                    </div>
                    <div class="social-icons-only">
                        <a href="#" class="social-icon instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-icon youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

</body>
</html>
