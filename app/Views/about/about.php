<main class="about-game pixel-game">

    <!-- HERO GAMIFICADO -->
    <section class="hero-about">
        <div class="pixel-particles"></div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="glitch-text" data-text="FUNCIONALIDADES">FUNCIONALIDADES</h1>
                <h2 class="subtitle-pixel">DE <span class="highlight">TRILHAS, QUESTS</span> E <span class="highlight">CONQUISTAS</span></h2>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge" class="stat-icon-img">
                        <span class="stat-value">Badges</span>
                    </div>
                    <div class="stat-item">
                        <img src="<?= $baseUrl ?>/public/imagens/foguete.png" alt="XP" class="stat-icon-img">
                        <span class="stat-value">Sistema XP</span>
                    </div>
                    <div class="stat-item">
                        <img src="<?= $baseUrl ?>/public/imagens/personagem.png" alt="Trilhas" class="stat-icon-img">
                        <span class="stat-value">Trilhas</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="<?= $baseUrl ?>/public/imagens/gamer.png" alt="Gamer" class="hero-img">
            </div>
        </div>
    </section>

    <!-- TRILHAS DE CONQUISTAS -->
    <section class="trilhas-section">
        <div class="section-header">
            <h2 class="pixel-title">
                TRILHAS DE EVOLUÇÃO
            </h2>
            <p class="section-subtitle">Complete missões e evolua sua carreira como um verdadeiro jogador</p>
        </div>

        <div class="trilhas-map">
            <!-- Trilha 1: Primeiro Currículo -->
            <div class="trilha-card trilha-start">
                <div class="trilha-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil" class="trilha-badge">
                    <div class="trilha-level">
                        <span class="level-text">NÍVEL 1</span>
                    </div>
                </div>
                <h3 class="trilha-title">Trilha do Primeiro Currículo</h3>
                <p class="trilha-description">
                    Crie seu perfil profissional completo e desbloqueie sua primeira conquista. 
                    Preencha todas as informações e ganhe +100 XP!
                </p>
                <div class="trilha-rewards">
                    <span class="reward-item">+100 XP</span>
                    <span class="reward-item"><i class="fas fa-medal"></i> Badge Bronze</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/5 Etapas</span>
                </div>
            </div>

            <!-- Trilha 2: Primeira Candidatura -->
            <div class="trilha-card trilha-middle">
                <div class="trilha-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="trilha-badge">
                    <div class="trilha-level">
                        <span class="level-text">NÍVEL 2</span>
                    </div>
                </div>
                <h3 class="trilha-title">Trilha da Primeira Candidatura</h3>
                <p class="trilha-description">
                    Candidate-se à sua primeira vaga e dê o primeiro passo rumo ao sucesso. 
                    Mostre seu potencial e ganhe +250 XP!
                </p>
                <div class="trilha-rewards">
                    <span class="reward-item">+250 XP</span>
                    <span class="reward-item"><i class="fas fa-medal"></i> Badge Prata</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/3 Etapas</span>
                </div>
            </div>

            <!-- Trilha 3: Primeira Vaga -->
            <div class="trilha-card trilha-featured">
                <div class="trilha-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Primeira Vaga" class="trilha-badge">
                    <div class="trilha-level legendary">
                        <span class="level-text">NÍVEL 5</span>
                    </div>
                </div>
                <h3 class="trilha-title">Trilha da Primeira Vaga</h3>
                <p class="trilha-description">
                    Conquiste sua primeira oportunidade profissional através do VDVagas! 
                    Complete a jornada e ganhe +1000 XP e o troféu lendário!
                </p>
                <div class="trilha-rewards">
                    <span class="reward-item legendary">+1000 XP</span>
                    <span class="reward-item legendary"><i class="fas fa-trophy"></i> Troféu Ouro</span>
                </div>
                <div class="progress-bar legendary">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/10 Etapas</span>
                </div>
            </div>

            <!-- Trilha 4: Explorador de Vagas -->
            <div class="trilha-card trilha-end">
                <div class="trilha-header">
                    <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Explorador" class="trilha-badge">
                    <div class="trilha-level">
                        <span class="level-text">NÍVEL 4</span>
                    </div>
                </div>
                <h3 class="trilha-title">Explorador de Vagas</h3>
                <p class="trilha-description">
                    Explore diferentes setores e descubra oportunidades únicas. Candidate-se a 5 vagas diferentes e ganhe +500 XP!
                </p>
                <div class="trilha-rewards">
                    <span class="reward-item">+500 XP</span>
                    <span class="reward-item"><i class="fas fa-medal"></i> Badge Explorador</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/5 Vagas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SISTEMA DE BADGES E XP -->
    <section class="badges-section">
        <div class="section-header">
            <h2 class="pixel-title">
                SISTEMA DE BADGES E XP
            </h2>
            <p class="section-subtitle">Ganhe experiência, desbloqueie conquistas e evolua sua visibilidade</p>
        </div>

        <div class="badges-grid">
            <div class="badge-card">
                <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil" class="badge-image">
                <h3 class="badge-title">Perfil Completo</h3>
                <p class="badge-description">Complete 100% do seu perfil profissional</p>
                <div class="badge-reward">+100 XP</div>
            </div>

            <div class="badge-card">
                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="badge-image">
                <h3 class="badge-title">Primeira Conquista</h3>
                <p class="badge-description">Candidate-se à sua primeira vaga</p>
                <div class="badge-reward">+250 XP</div>
            </div>

            <div class="badge-card legendary">
                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Vaga" class="badge-image">
                <h3 class="badge-title">Primeira Vaga</h3>
                <p class="badge-description">Conquiste sua primeira oportunidade</p>
                <div class="badge-reward legendary">+1000 XP</div>
            </div>

            <div class="badge-card">
                <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Evolution" class="badge-image">
                <h3 class="badge-title">Explorador</h3>
                <p class="badge-description">Candidate-se a 5 vagas diferentes</p>
                <div class="badge-reward">+500 XP</div>
            </div>
        </div>
    </section>

    <!-- EXEMPLO DE PERFIL DO USUÁRIO -->
    <section class="profile-example-section">
        <div class="section-header">
            <h2 class="pixel-title">
                EXEMPLO DE PERFIL
            </h2>
            <p class="section-subtitle">Veja como fica o perfil gamificado de um usuário da plataforma</p>
        </div>

        <div class="profile-container">
            <div class="profile-card">
                <!-- Header do Perfil -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="<?= $baseUrl ?>/public/imagens/img_gu.jpg" alt="Avatar Gustavo" class="avatar-img">
                        <div class="level-badge">
                            <span class="level-number">15</span>
                            <span class="level-text">LVL</span>
                        </div>
                    </div>
                    <div class="profile-info">
                        <h3 class="profile-name">Gustavo Becker</h3>
                        <p class="profile-title">Full Stack Developer</p>
                        <div class="profile-stats">
                            <div class="stat-box">
                                <span class="stat-number">2.850</span>
                                <span class="stat-label">XP Total</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">12</span>
                                <span class="stat-label">Badges</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">3</span>
                                <span class="stat-label">Trilhas</span>
                            </div>
                            <div class="stat-box gold-box">
                                <img src="<?= $baseUrl ?>/public/imagens/gold.png" alt="VDCoins" class="gold-icon">
                                <span class="stat-number">50</span>
                                <span class="stat-label">VDCoins</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Badges Conquistadas -->
                    <div class="profile-badges-container">
                        <div class="profile-badges-unlocked">
                            <div class="badge-unlocked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil" class="badge-unlocked-img">
                            </div>
                            <div class="badge-unlocked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="badge-unlocked-img">
                            </div>
                            <div class="badge-unlocked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Vaga" class="badge-unlocked-img">
                            </div>
                            <div class="badge-unlocked">
                                <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Explorador" class="badge-unlocked-img">
                            </div>
                        </div>
                        <div class="profile-badges-locked">
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                        </div>
                        <div class="profile-badges-locked">
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                            <div class="badge-locked">
                                <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Bloqueada" class="badge-locked-img">
                            </div>
                        </div>
                    </div>
                    
                    <div class="profile-character">
                        <img src="<?= $baseUrl ?>/public/imagens/personagem.png" alt="Personagem" class="character-img">
                    </div>
                </div>

                <!-- Skills -->
                <div class="profile-section">
                    <h4 class="section-title">
                        <i class="fas fa-code"></i> Skills Técnicas
                    </h4>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">PHP</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">React</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span class="skill-name">Node.js</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Badges Conquistados -->
                <div class="profile-section">
                    <h4 class="section-title">
                        <i class="fas fa-trophy"></i> Badges Conquistados
                    </h4>
                    <div class="badges-showcase">
                        <div class="badge-item earned">
                            <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil" class="badge-icon">
                            <span class="badge-name">Perfil Completo</span>
                        </div>
                        <div class="badge-item earned">
                            <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="badge-icon">
                            <span class="badge-name">Primeira Conquista</span>
                        </div>
                        <div class="badge-item earned legendary">
                            <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Vaga" class="badge-icon">
                            <span class="badge-name">Primeira Vaga</span>
                        </div>
                        <div class="badge-item earned">
                            <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Badge Evolution" class="badge-icon">
                            <span class="badge-name">Explorador</span>
                        </div>
                        <div class="badge-item locked">
                            <i class="fas fa-lock"></i>
                            <span class="badge-name">Mentor</span>
                        </div>
                        <div class="badge-item locked">
                            <i class="fas fa-lock"></i>
                            <span class="badge-name">Expert</span>
                        </div>
                    </div>
                </div>

                <!-- Trilhas Completadas -->
                <div class="profile-section">
                    <h4 class="section-title">
                        <i class="fas fa-map-marked-alt"></i> Trilhas Completas
                    </h4>
                    <div class="trails-progress">
                        <div class="trail-item completed">
                            <div class="trail-icon">
                                <img src="<?= $baseUrl ?>/public/imagens/curriculo.png" alt="Trilha 1" class="trail-image">
                            </div>
                            <div class="trail-info">
                                <h5 class="trail-name">Trilha do Primeiro Currículo</h5>
                                <div class="trail-progress-bar">
                                    <div class="trail-fill completed" style="width: 100%"></div>
                                </div>
                                <span class="trail-status completed">✓ Completada - +100 XP</span>
                            </div>
                        </div>

                        <div class="trail-item completed">
                            <div class="trail-icon">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Trilha 2" class="trail-image">
                            </div>
                            <div class="trail-info">
                                <h5 class="trail-name">Trilha da Primeira Candidatura</h5>
                                <div class="trail-progress-bar">
                                    <div class="trail-fill completed" style="width: 100%"></div>
                                </div>
                                <span class="trail-status completed">✓ Completada - +250 XP</span>
                            </div>
                        </div>

                        <div class="trail-item in-progress">
                            <div class="trail-icon">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Trilha 3" class="trail-image">
                            </div>
                            <div class="trail-info">
                                <h5 class="trail-name">Trilha da Primeira Vaga</h5>
                                <div class="trail-progress-bar">
                                    <div class="trail-fill in-progress" style="width: 70%"></div>
                                </div>
                                <span class="trail-status in-progress">🔄 Em Progresso - 7/10 Etapas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conquistas Recentes -->
                <div class="profile-section">
                    <h4 class="section-title">
                        <i class="fas fa-star"></i> Conquistas Recentes
                    </h4>
                    <div class="achievements-timeline">
                        <div class="achievement-item">
                            <div class="achievement-date">Hoje</div>
                            <div class="achievement-content">
                                <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Achievement" class="achievement-icon">
                                <div class="achievement-text">
                                    <strong>Badge "Explorador" conquistado!</strong>
                                    <p>Candidatou-se a 5 vagas diferentes (+500 XP)</p>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-date">2 dias</div>
                            <div class="achievement-content">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Achievement" class="achievement-icon">
                                <div class="achievement-text">
                                    <strong>Primeira Vaga Conquistada!</strong>
                                    <p>Contratado como Full Stack Developer (+1000 XP)</p>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-date">1 semana</div>
                            <div class="achievement-content">
                                <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Achievement" class="achievement-icon">
                                <div class="achievement-text">
                                    <strong>Primeira Candidatura Realizada</strong>
                                    <p>Candidatou-se à primeira vaga (+250 XP)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VANTAGENS VIP -->
    <section class="vip-advantages-section">
        <div class="section-header">
            <h2 class="pixel-title vip-title">
                VANTAGENS VIP
            </h2>
            <p class="section-subtitle">Usuários VIP têm acesso antecipado e benefícios exclusivos</p>
        </div>

        <div class="vip-content-wrapper">
            <div class="vip-comparison">
                <div class="plan-card free-plan">
                    <h3 class="plan-title">USUÁRIO FREE</h3>
                    <div class="plan-features">
                        <div class="feature-item">✓ Acesso às vagas públicas</div>
                        <div class="feature-item">✓ Sistema básico de XP</div>
                        <div class="feature-item">✓ Badges básicos</div>
                        <div class="feature-item disabled">✗ Acesso antecipado</div>
                        <div class="feature-item disabled">✗ Vagas VIP</div>
                        <div class="feature-item disabled">✗ Badges exclusivos</div>
                    </div>
                </div>

                <div class="plan-card vip-plan">
                    <h3 class="plan-title">USUÁRIO VIP</h3>
                    <div class="plan-badge">PREMIUM</div>
                    <div class="plan-features">
                        <div class="feature-item">✓ Tudo do plano FREE</div>
                        <div class="feature-item vip">✓ Acesso antecipado às vagas</div>
                        <div class="feature-item vip">✓ Vagas VIP exclusivas</div>
                        <div class="feature-item vip">✓ Badges VIP dourados</div>
                        <div class="feature-item vip">✓ XP multiplicado por 2x</div>
                        <div class="feature-item vip">✓ Prioridade no atendimento</div>
                    </div>
                </div>
            </div>

            <div class="vip-benefits">
                <h3 class="benefits-title">Por que ser VIP?</h3>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <img src="<?= $baseUrl ?>/public/imagens/gold.png" alt="Gold" class="benefit-icon">
                        <h4>Maior Visibilidade</h4>
                        <p>Seu perfil aparece em destaque para recrutadores</p>
                    </div>
                    <div class="benefit-item">
                        <img src="<?= $baseUrl ?>/public/imagens/foguete.png" alt="Foguete" class="benefit-icon">
                        <h4>Acesso Antecipado</h4>
                        <p>Veja e candidate-se às vagas antes dos outros</p>
                    </div>
                    <div class="benefit-item">
                        <img src="<?= $baseUrl ?>/public/imagens/logo-trofeu.png" alt="Troféu" class="benefit-icon">
                        <h4>Badges Exclusivos</h4>
                        <p>Conquiste badges VIP únicos e dourados</p>
                    </div>
                    <div class="benefit-item">
                        <img src="<?= $baseUrl ?>/public/imagens/personagem.png" alt="Prioridade" class="benefit-icon">
                        <h4>Suporte Prioritário</h4>
                        <p>Atendimento rápido e personalizado</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
