<main id="home" class="home pixel-game">

    <!-- HERO GAMIFICADO -->
    <section class="hero-game">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-badges">
                    <div class="pixel-badge">
                        <i class="fas fa-arrow-up"></i>
                        <span class="badge-text">LEVEL UP</span>
                    </div>
                    <div class="pixel-badge badge-xp">
                        <i class="fas fa-star"></i>
                        <span class="badge-text">+500 XP</span>
                    </div>
                    <div class="pixel-badge badge-achievement">
                        <i class="fas fa-trophy"></i>
                        <span class="badge-text">CONQUISTAS</span>
                    </div>
                </div>
                
                <div class="hero-badge-images">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Primeira Vaga" class="badge-img">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="badge-img">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil Forte" class="badge-img">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Primeira Vaga" class="badge-img">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="badge-img">
                </div>
                
                <h1 class="glitch-text" data-text="NexusPro">NexusPro</h1>
                <h2 class="subtitle-pixel">Resolvendo o bug entre <span class="highlight">talentos</span> e <span class="highlight">oportunidades</span></h2>
                
                <div class="hero-stats">
                    <div class="hero-stat-item">
                        <i class="fas fa-gamepad stat-icon"></i>
                        <span class="stat-value">Gamificado</span>
                    </div>
                    <div class="hero-stat-item">
                        <i class="fas fa-trophy stat-icon"></i>
                        <span class="stat-value">Conquistas</span>
                    </div>
                    <div class="hero-stat-item">
                        <i class="fas fa-chart-line stat-icon"></i>
                        <span class="stat-value">Trilhas</span>
                    </div>
                </div>
                
                <div class="hero-buttons">
                    <a href="#" class="btn-pixel btn-primary open-signup-modal">
                        <span>▶ COMEÇAR JORNADA</span>
                    </a>
                    <a href="<?= $baseUrl ?>/planos" class="btn-pixel btn-secondary">
                        <span>★ VER PLANOS</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-image">
                <div class="pixel-frame">
                    <img src="<?= $baseUrl ?>/public/imagens/nexuspro-logo-removebg.png" alt="Subindo a Escada do Sucesso">
                    <div class="frame-corners"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRILHAS DE CONQUISTAS -->
    <section class="quests-section">
        <div class="section-header">
            <h2 class="pixel-title">
                TRILHAS DE CONQUISTAS
            </h2>
            <p class="section-subtitle">Complete missões e evolua sua carreira como um verdadeiro jogador</p>
        </div>

        <div class="quests-grid">
            <!-- Trilha 1: Primeiro Currículo -->
            <div class="quest-card">
                <div class="quest-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-perfil-frote.png" alt="Badge Perfil Forte" class="quest-badge">
                    <div class="quest-level">
                        <span class="level-text">NÍVEL 1</span>
                    </div>
                </div>
                <h3 class="quest-title">Trilha do Primeiro Currículo</h3>
                <p class="quest-description">
                    Crie seu perfil profissional completo e desbloqueie sua primeira conquista. 
                    Preencha todas as informações e ganhe +100 XP!
                </p>
                <div class="quest-rewards">
                    <span class="reward-item">+100 XP</span>
                    <span class="reward-item"><i class="fas fa-medal"></i> Badge Bronze</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/5 Etapas</span>
                </div>
            </div>

            <!-- Trilha 2: Primeira Candidatura -->
            <div class="quest-card">
                <div class="quest-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-conquista.png" alt="Badge Conquista" class="quest-badge">
                    <div class="quest-level">
                        <span class="level-text">NÍVEL 2</span>
                    </div>
                </div>
                <h3 class="quest-title">Trilha da Primeira Candidatura</h3>
                <p class="quest-description">
                    Candidate-se à sua primeira vaga e dê o primeiro passo rumo ao sucesso. 
                    Mostre seu potencial e ganhe +250 XP!
                </p>
                <div class="quest-rewards">
                    <span class="reward-item">+250 XP</span>
                    <span class="reward-item"><i class="fas fa-medal"></i> Badge Prata</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/3 Etapas</span>
                </div>
            </div>

            <!-- Trilha 3: Primeira Vaga -->
            <div class="quest-card featured">
                <div class="quest-header">
                    <img src="<?= $baseUrl ?>/public/imagens/badge-1-vaga.png" alt="Badge Primeira Vaga" class="quest-badge">
                    <div class="quest-level legendary">
                        <span class="level-text">NÍVEL 5</span>
                    </div>
                </div>
                <h3 class="quest-title">Trilha da Primeira Vaga</h3>
                <p class="quest-description">
                    Conquiste sua primeira oportunidade profissional através do NexusPro! 
                    Complete a jornada e ganhe +1000 XP e o troféu lendário!
                </p>
                <div class="quest-rewards">
                    <span class="reward-item legendary">+1000 XP</span>
                    <span class="reward-item legendary"><i class="fas fa-trophy"></i> Troféu Ouro</span>
                </div>
                <div class="progress-bar legendary">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/10 Etapas</span>
                </div>
            </div>

            <!-- Trilha 4: Explorador de Vagas -->
            <div class="quest-card">
                <div class="quest-header">
                    <img src="<?= $baseUrl ?>/public/imagens/explorador.png" alt="Evolution Badge" class="quest-badge">
                    <div class="quest-level">
                        <span class="level-text">NÍVEL 3</span>
                    </div>
                </div>
                <h3 class="quest-title">Explorador de Vagas</h3>    
                <p class="quest-description">
                    Explore diferentes setores e descubra oportunidades únicas. 
                    Candidate-se a 5 vagas diferentes e ganhe +500 XP!
                </p>
                <div class="quest-rewards">
                    <span class="reward-item">+500 XP</span>
                    <span class="reward-item"><i class="fas fa-star"></i> Badge Explorador</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 0%"></div>
                    <span class="progress-text">0/5 Vagas</span>
                </div>
            </div>
        </div>
    </section>

    <!-- VAGAS DISPONÍVEIS -->
    <section class="jobs-game">
        <div class="section-header">
            <h2 class="pixel-title">
                VAGAS DISPONÍVEIS
            </h2>
            <p class="section-subtitle">Escolha sua próxima aventura profissional</p>
        </div>

        <div class="jobs-grid-pixel">
            <!-- Vaga 1: Desenvolvedor -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-laptop-code job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Desenvolvedor Full Stack</h3>
                <p class="job-company"><i class="fas fa-building"></i> Tech Solutions Inc.</p>
                <p class="job-description">
                    Desenvolver aplicações web modernas usando React, Node.js e PostgreSQL. 
                    Experiência com APIs RESTful e metodologias ágeis.
                </p>
                <div class="job-tags">
                    <span class="tag">React</span>
                    <span class="tag">Node.js</span>
                    <span class="tag">SQL</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+500 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 2: Designer -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-palette job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">Designer UI/UX</h3>
                <p class="job-company"><i class="fas fa-building"></i> Creative Studio</p>
                <p class="job-description">
                    Criar interfaces intuitivas e experiências memoráveis. 
                    Domínio de Figma, Adobe XD e princípios de design thinking.
                </p>
                <div class="job-tags">
                    <span class="tag">Figma</span>
                    <span class="tag">UI/UX</span>
                    <span class="tag">Prototipagem</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+300 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 3: Marketing -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-mobile-alt job-icon"></i>
                    <span class="job-difficulty epic">ÉPICO</span>
                </div>
                <h3 class="job-title">Analista de Marketing Digital</h3>
                <p class="job-company"><i class="fas fa-building"></i> Digital Growth Agency</p>
                <p class="job-description">
                    Gerenciar campanhas de mídia paga, SEO e análise de métricas. 
                    Experiência com Google Ads, Facebook Ads e Analytics.
                </p>
                <div class="job-tags">
                    <span class="tag">SEO</span>
                    <span class="tag">Ads</span>
                    <span class="tag">Analytics</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+750 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 4: Suporte -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-headset job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">Estágio em Suporte Técnico</h3>
                <p class="job-company"><i class="fas fa-building"></i> Help Desk Solutions</p>
                <p class="job-description">
                    Atuar no suporte aos clientes via chat, telefone e presencial. 
                    Cursando ensino superior em TI ou áreas afins.
                </p>
                <div class="job-tags">
                    <span class="tag">Atendimento</span>
                    <span class="tag">TI</span>
                    <span class="tag">Estágio</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+200 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 5: Vendas -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-dollar-sign job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Consultor de Vendas</h3>
                <p class="job-company"><i class="fas fa-building"></i> Sales Pro Company</p>
                <p class="job-description">
                    Prospectar clientes, realizar apresentações e fechar negócios. 
                    Comissões atrativas e plano de carreira estruturado.
                </p>
                <div class="job-tags">
                    <span class="tag">Vendas</span>
                    <span class="tag">B2B</span>
                    <span class="tag">Comissão</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+400 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 6: Dados -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-chart-bar job-icon"></i>
                    <span class="job-difficulty legendary">LENDÁRIO</span>
                </div>
                <h3 class="job-title">Cientista de Dados</h3>
                <p class="job-company"><i class="fas fa-building"></i> Data Intelligence Corp</p>
                <p class="job-description">
                    Análise de grandes volumes de dados, machine learning e BI. 
                    Python, R, SQL e experiência com modelos preditivos.
                </p>
                <div class="job-tags">
                    <span class="tag">Python</span>
                    <span class="tag">ML</span>
                    <span class="tag">Big Data</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+1000 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 7: Desenvolvedor -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-laptop-code job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Desenvolvedor Full Stack</h3>
                <p class="job-company"><i class="fas fa-building"></i> Tech Solutions Inc.</p>
                <p class="job-description">
                    Desenvolver aplicações web modernas usando React, Node.js e PostgreSQL. 
                    Experiência com APIs RESTful e metodologias ágeis.
                </p>
                <div class="job-tags">
                    <span class="tag">React</span>
                    <span class="tag">Node.js</span>
                    <span class="tag">SQL</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+500 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 8: Designer -->
            <div class="job-card-pixel">
                <div class="job-header">
                    <i class="fas fa-palette job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">Designer UI/UX</h3>
                <p class="job-company"><i class="fas fa-building"></i> Creative Studio</p>
                <p class="job-description">
                    Criar interfaces intuitivas e experiências memoráveis. 
                    Domínio de Figma, Adobe XD e princípios de design thinking.
                </p>
                <div class="job-tags">
                    <span class="tag">Figma</span>
                    <span class="tag">UI/UX</span>
                    <span class="tag">Prototipagem</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+300 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
        </div>

        <div class="see-all-pixel">
            <a href="#" class="btn-pixel btn-primary open-signup-modal">
                <span><i class="fas fa-bullseye"></i> EXPLORAR TODAS AS VAGAS</span>
            </a>
        </div>
    </section>

    <!-- SOBRE NÓS GAMIFICADO -->
    <section class="about-game">
        <div class="section-header">
            <h2 class="pixel-title">
                SOBRE O NEXUSPRO
            </h2>
            <p class="section-subtitle">
                Nossa missão é transformar a busca por emprego em uma jornada épica e recompensadora
            </p>
        </div>

        <div class="about-cards-pixel">
            <div class="about-card-pixel card-blue">
                <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
                <h3 class="card-title">Inovação</h3>
                <p class="card-description">
                    Gamificamos o processo de recrutamento para tornar cada etapa mais engajante. 
                    Conquiste badges, suba de nível e destaque-se no mercado!
                </p>
                <div class="card-stats">
                    <span class="stat">+50 Empresas</span>
                    <span class="stat">+200 Vagas</span>
                </div>
            </div>

            <div class="about-card-pixel card-yellow">
                <div class="card-icon"><i class="fas fa-handshake"></i></div>
                <h3 class="card-title">Confiança</h3>
                <p class="card-description">
                    Parcerias sólidas e transparentes são nosso alicerce. 
                    Conectamos talentos reais com oportunidades verdadeiras.
                </p>
                <div class="card-stats">
                    <span class="stat">100% Verificado</span>
                    <span class="stat">Suporte 24/7</span>
                </div>
            </div>

            <div class="about-card-pixel card-purple">
                <div class="card-icon"><i class="fas fa-globe"></i></div>
                <h3 class="card-title">Conexão</h3>
                <p class="card-description">
                    Criamos pontes entre empresas e candidatos da sua região. 
                    Valorizamos talentos locais e fortalecemos comunidades.
                </p>
                <div class="card-stats">
                    <span class="stat">Regional</span>
                    <span class="stat">+1000 Usuários</span>
                </div>
            </div>
        </div>

        <div class="about-feature">
            <div class="feature-image">
                <div class="pixel-frame-large">
                    <img src="<?= $baseUrl ?>/public/imagens/arqueiro-feliz.png" alt="Gamer VDVagas">
                </div>
            </div>
            <div class="feature-text">
                <h3 class="feature-title">Por que um portal de vagas <span class="highlight">gamificado</span>?</h3>
                <p class="feature-description">
                    Em um mundo digital e acelerado, transformamos a busca por emprego em uma 
                    <span class="highlight">experiência interativa e motivadora</span>. 
                    O NexusPro une tecnologia, design e gamificação para criar um ambiente onde 
                    cada candidatura é uma missão, cada conquista é celebrada, e cada passo te aproxima do seu objetivo final.
                </p>
                <ul class="feature-list">
                    <li class="feature-green"><i class="fas fa-bolt list-icon"></i> Sistema de XP e níveis de progressão</li>
                    <li class="feature-blue"><i class="fas fa-trophy list-icon"></i> Badges e conquistas desbloqueáveis</li>
                    <li class="feature-purple"><i class="fas fa-bullseye list-icon"></i> Trilhas personalizadas de carreira</li>
                    <li class="feature-pink"><i class="fas fa-chart-bar list-icon"></i> Dashboard com estatísticas em tempo real</li>
                </ul>
                <a href="#" class="btn-pixel btn-primary open-signup-modal">
                    <i class="fas fa-rocket"></i> <span>COMEÇAR AGORA</span>
                </a>
            </div>
        </div>
    </section>

    <!-- CONTATO GAMIFICADO -->
    <section class="contact-game">
        <div class="section-header">
            <h2 class="pixel-title">
                CANAL DE COMUNICAÇÃO
            </h2>
            <p class="section-subtitle">Envie uma mensagem e desbloqueie suporte exclusivo</p>
        </div>

        <div class="contact-container-pixel">
            <!-- Formulário -->
            <div class="contact-form-wrapper">
                <form class="contact-form-pixel" action="#" method="POST">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> NOME COMPLETO</label>
                        <input type="text" id="name" name="name" placeholder="Digite seu nome" required>
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="fas fa-envelope"></i> EMAIL</label>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="company"><i class="fas fa-building"></i> EMPRESA (OPCIONAL)</label>
                        <input type="text" id="company" name="company" placeholder="Nome da empresa">
                    </div>

                    <div class="form-group">
                        <label for="message"><i class="fas fa-comment"></i> MENSAGEM</label>
                        <textarea id="message" name="message" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
                    </div>

                    <button type="submit" class="btn-pixel btn-primary btn-submit">
                        <span><i class="fas fa-paper-plane"></i> ENVIAR MENSAGEM</span>
                    </button>
                </form>
            </div>

            <!-- Mapa e Redes Sociais -->
            <div class="contact-info-wrapper">
                <div class="map-pixel">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.9876910566713!2d-51.15222168452768!3d-27.006678882991655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3e47b6d90b2d7%3A0xaaf4472dfc9c2e57!2sVideira%2C%20SC!5e0!3m2!1spt-BR!2sbr!4v1696532100000!5m2!1spt-BR!2sbr"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

                <div class="social-section">
                    <h3 class="social-title">NOS SIGA NAS REDES</h3>
                    <div class="social-icons-pixel">
                        <a href="#" class="social-link" title="Instagram">
                            <img src="<?= $baseUrl ?>/public/imagens/instagram.png" alt="Instagram" class="social-icon-img">
                        </a>
                        <a href="#" class="social-link" title="Facebook">
                            <img src="<?= $baseUrl ?>/public/imagens/facebook.png" alt="Facebook" class="social-icon-img">
                        </a>
                        <a href="#" class="social-link" title="LinkedIn">
                            <img src="<?= $baseUrl ?>/public/imagens/linkedin.png" alt="LinkedIn" class="social-icon-img">
                        </a>
                        <a href="#" class="social-link" title="YouTube">
                            <img src="<?= $baseUrl ?>/public/imagens/youtube.png" alt="YouTube" class="social-icon-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
