<!-- CSS específico para vagas -->
<link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/vagas.css">

<main id="vagas" class="vagas-main">
    <!-- Filtros -->
    <section class="filters-section">
        <div class="filters-container">
            <h2 class="filters-title">
                FILTROS DE BUSCA
            </h2>
            
            
            <div class="filters-wrapper">
                <input type="text" class="filter-input-inline" placeholder="Buscar vaga...">
                
                <select class="filter-select-inline">
                    <option>Localização</option>
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                    <option>Belo Horizonte</option>
                    <option>Remote</option>
                </select>
                
                <select class="filter-select-inline">
                    <option>Área</option>
                    <option>Tecnologia</option>
                    <option>Marketing</option>
                    <option>Vendas</option>
                    <option>Design</option>
                </select>
                
                <select class="filter-select-inline">
                    <option>Salário</option>
                    <option>Até R$ 3.000</option>
                    <option>R$ 3.000 - R$ 6.000</option>
                    <option>R$ 6.000 - R$ 10.000</option>
                    <option>Acima de R$ 10.000</option>
                </select>
                
                <button class="btn-filter-inline">
                    <i class="fas fa-search"></i>
                    BUSCAR
                </button>
                <button class="btn-clear-inline">
                    <i class="fas fa-times"></i>
                    LIMPAR
                </button>
            </div>
        </div>
    </section>

    <!-- Lista de Vagas -->
    <section class="vagas-list">
        <div class="list-header">
            <h2 class="list-title">
                TODAS AS VAGAS
                <span class="free-badge">FREE</span>
            </h2>
            <div class="list-controls">
                <select class="sort-select">
                    <option>Mais recentes</option>
                    <option>Maior salário</option>
                    <option>Menor salário</option>
                    <option>Alfabética</option>
                </select>
            </div>
        </div>
        
        <div class="vagas-grid">
            
                    <div class="vaga-card">
                        <div class="card-header">
                            <div class="company-logo">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="card-status active">
                                <i class="fas fa-circle"></i>
                                ATIVA
                            </div>
                        </div>
                        <h3 class="vaga-title"><?= htmlspecialchars($vaga->nome ?? 'Vaga sem nome') ?></h3>
                        <p class="company-name"><?= htmlspecialchars($vaga->funcao ?? 'Empresa não informada') ?></p>
                        <div class="vaga-details">
                            <span class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <?= htmlspecialchars($vaga->cidade ?? 'Localização não informada') ?>
                            </span>
                            <span class="detail-item">
                                <i class="fas fa-dollar-sign"></i>
                                R$ <?= number_format($vaga->salario ?? 0, 0, ',', '.') ?>
                            </span>
                            <span class="detail-item">
                                <i class="fas fa-clock"></i>
                                CLT
                            </span>
                        </div>
                        <p class="vaga-description">
                            <?= htmlspecialchars(substr($vaga->descricao ?? 'Descrição não disponível', 0, 100)) ?>...
                        </p>
                        <div class="vaga-tags">
                            <?php if ($vaga->vaga_pcd ?? false): ?>
                                <span class="tag special">PCD</span>
                            <?php endif; ?>
                            <?php if ($vaga->vaga_estagio ?? false): ?>
                                <span class="tag special">Estágio</span>
                            <?php endif; ?>
                            <?php if ($vaga->vaga_aprendiz ?? false): ?>
                                <span class="tag special">Aprendiz</span>
                            <?php endif; ?>
                        </div>
                        <button class="btn-apply open-login-modal">
                            <i class="fas fa-paper-plane"></i>
                            CANDIDATAR-SE
                        </button>
                    </div>
            
            <!-- Vagas de exemplo para completar 12 cards -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-code job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Frontend Developer</h3>
                <p class="job-company"><i class="fas fa-building"></i> Digital Agency</p>
                <p class="job-description">
                    Desenvolvedor frontend para criar interfaces modernas e responsivas usando React, CSS3 e JavaScript ES6+.
                </p>
                <div class="job-tags">
                    <span class="tag">React</span>
                    <span class="tag">CSS</span>
                    <span class="tag">JavaScript</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+400 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 2: Mobile Developer -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-mobile-alt job-icon"></i>
                    <span class="job-difficulty epic">ÉPICO</span>
                </div>
                <h3 class="job-title">Mobile Developer</h3>
                <p class="job-company"><i class="fas fa-building"></i> AppTech Solutions</p>
                <p class="job-description">
                    Desenvolvedor mobile para aplicativos iOS e Android usando React Native e tecnologias nativas.
                </p>
                <div class="job-tags">
                    <span class="tag">React Native</span>
                    <span class="tag">iOS</span>
                    <span class="tag">Android</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+600 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 3: Data Scientist -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-database job-icon"></i>
                    <span class="job-difficulty legendary">LENDÁRIO</span>
                </div>
                <h3 class="job-title">Data Scientist</h3>
                <p class="job-company"><i class="fas fa-building"></i> AI Analytics Corp</p>
                <p class="job-description">
                    Cientista de dados para análise de big data, machine learning e desenvolvimento de modelos preditivos.
                </p>
                <div class="job-tags">
                    <span class="tag">Python</span>
                    <span class="tag">Machine Learning</span>
                    <span class="tag">SQL</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+1000 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 4: UX/UI Designer -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-paint-brush job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">UX/UI Designer</h3>
                <p class="job-company"><i class="fas fa-building"></i> Creative Studio</p>
                <p class="job-description">
                    Designer para criar experiências digitais incríveis e interfaces intuitivas usando Figma e Adobe XD.
                </p>
                <div class="job-tags">
                    <span class="tag">Figma</span>
                    <span class="tag">Adobe XD</span>
                    <span class="tag">Prototyping</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+500 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 5: Digital Marketing -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-chart-line job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">Digital Marketing Specialist</h3>
                <p class="job-company"><i class="fas fa-building"></i> Growth Marketing</p>
                <p class="job-description">
                    Especialista em marketing digital para gerenciar campanhas online, SEO e análise de métricas.
                </p>
                <div class="job-tags">
                    <span class="tag">Google Ads</span>
                    <span class="tag">Facebook Ads</span>
                    <span class="tag">Analytics</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+350 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 6: Backend Developer -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-server job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Backend Developer</h3>
                <p class="job-company"><i class="fas fa-building"></i> ServerTech Solutions</p>
                <p class="job-description">
                    Desenvolvedor backend para APIs RESTful, microserviços e arquiteturas escaláveis.
                </p>
                <div class="job-tags">
                    <span class="tag">Java</span>
                    <span class="tag">Spring Boot</span>
                    <span class="tag">PostgreSQL</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+550 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 7: Cybersecurity -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-shield-alt job-icon"></i>
                    <span class="job-difficulty epic">ÉPICO</span>
                </div>
                <h3 class="job-title">Cybersecurity Analyst</h3>
                <p class="job-company"><i class="fas fa-building"></i> SecureNet Corp</p>
                <p class="job-description">
                    Analista de segurança cibernética para proteção de dados, testes de penetração e auditoria.
                </p>
                <div class="job-tags">
                    <span class="tag">CISSP</span>
                    <span class="tag">Penetration Testing</span>
                    <span class="tag">Firewall</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+750 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 8: Game Developer -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-gamepad job-icon"></i>
                    <span class="job-difficulty rare">RARO</span>
                </div>
                <h3 class="job-title">Game Developer</h3>
                <p class="job-company"><i class="fas fa-building"></i> PixelGames Studio</p>
                <p class="job-description">
                    Desenvolvedor de jogos para plataformas mobile e PC usando Unity, C# e modelagem 3D.
                </p>
                <div class="job-tags">
                    <span class="tag">Unity</span>
                    <span class="tag">C#</span>
                    <span class="tag">3D Modeling</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+650 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 9: Cloud Architect -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-cloud job-icon"></i>
                    <span class="job-difficulty legendary">LENDÁRIO</span>
                </div>
                <h3 class="job-title">Cloud Architect</h3>
                <p class="job-company"><i class="fas fa-building"></i> CloudFirst Technologies</p>
                <p class="job-description">
                    Arquiteto de soluções em nuvem para infraestrutura escalável usando AWS, Azure e Terraform.
                </p>
                <div class="job-tags">
                    <span class="tag">AWS</span>
                    <span class="tag">Azure</span>
                    <span class="tag">Terraform</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+900 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 10: AI Engineer -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-robot job-icon"></i>
                    <span class="job-difficulty legendary">LENDÁRIO</span>
                </div>
                <h3 class="job-title">AI Engineer</h3>
                <p class="job-company"><i class="fas fa-building"></i> FutureTech AI</p>
                <p class="job-description">
                    Engenheiro de IA para desenvolvimento de soluções inteligentes usando TensorFlow e PyTorch.
                </p>
                <div class="job-tags">
                    <span class="tag">TensorFlow</span>
                    <span class="tag">PyTorch</span>
                    <span class="tag">Deep Learning</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+1200 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 11: Estágio -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-graduation-cap job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">Estágio em Desenvolvimento</h3>
                <p class="job-company"><i class="fas fa-building"></i> StartupTech</p>
                <p class="job-description">
                    Oportunidade de estágio para estudantes de tecnologia aprenderem JavaScript, HTML e CSS.
                </p>
                <div class="job-tags">
                    <span class="tag special">Estágio</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">HTML/CSS</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+200 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- Card 12: QA Tester -->
            <div class="vaga-card">
                <div class="job-header">
                    <i class="fas fa-bug job-icon"></i>
                    <span class="job-difficulty common">COMUM</span>
                </div>
                <h3 class="job-title">QA Tester</h3>
                <p class="job-company"><i class="fas fa-building"></i> TestPro Solutions</p>
                <p class="job-description">
                    Analista de qualidade para testes manuais e automatizados, garantindo a qualidade do software.
                </p>
                <div class="job-tags">
                    <span class="tag">Selenium</span>
                    <span class="tag">Testes</span>
                    <span class="tag">QA</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp">+300 XP</span>
                    <button class="btn-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Área VIP -->
    <section class="jovem-aprendiz-section">
        <div class="jovem-aprendiz-header">
            <h2 class="jovem-aprendiz-title">
                VAGAS JOVEM APRENDIZ
                <span class="jovem-aprendiz-badge">INICIANTE</span>
            </h2>
            <p class="jovem-aprendiz-description">Primeiras oportunidades para começar sua jornada profissional</p>
        </div>
        
        <div class="jovem-aprendiz-grid">
            <!-- Vaga 1: Aprendiz Administrativo -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-clipboard job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz Administrativo</h3>
                <p class="job-company"><i class="fas fa-building"></i> Empresa ABC Ltda</p>
                <p class="job-description">
                    Oportunidade para jovens de 14 a 24 anos aprenderem rotinas administrativas, atendimento e organização.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Administrativo</span>
                    <span class="tag jovem-aprendiz-tag">Atendimento</span>
                    <span class="tag jovem-aprendiz-tag">Organização</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+150 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 2: Aprendiz de TI -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-laptop job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz de Tecnologia</h3>
                <p class="job-company"><i class="fas fa-building"></i> TechStart Solutions</p>
                <p class="job-description">
                    Primeira experiência em TI, aprendendo suporte técnico, manutenção de computadores e noções de programação.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Suporte</span>
                    <span class="tag jovem-aprendiz-tag">Hardware</span>
                    <span class="tag jovem-aprendiz-tag">Programação</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+200 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 3: Aprendiz de Vendas -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-handshake job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz de Vendas</h3>
                <p class="job-company"><i class="fas fa-building"></i> Varejo Premium</p>
                <p class="job-description">
                    Desenvolva habilidades de comunicação e vendas, aprendendo técnicas de atendimento ao cliente e negociação.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Vendas</span>
                    <span class="tag jovem-aprendiz-tag">Atendimento</span>
                    <span class="tag jovem-aprendiz-tag">Comunicação</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+180 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 4: Aprendiz de Marketing -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-bullhorn job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz de Marketing Digital</h3>
                <p class="job-company"><i class="fas fa-building"></i> Agência Criativa</p>
                <p class="job-description">
                    Aprenda sobre redes sociais, criação de conteúdo e campanhas digitais em um ambiente jovem e dinâmico.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Redes Sociais</span>
                    <span class="tag jovem-aprendiz-tag">Conteúdo</span>
                    <span class="tag jovem-aprendiz-tag">Digital</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+220 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 5: Aprendiz de Logística -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-truck job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz de Logística</h3>
                <p class="job-company"><i class="fas fa-building"></i> LogiMax Transportes</p>
                <p class="job-description">
                    Conheça o mundo da logística, aprendendo sobre estoque, expedição e controle de mercadorias.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Estoque</span>
                    <span class="tag jovem-aprendiz-tag">Expedição</span>
                    <span class="tag jovem-aprendiz-tag">Controle</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+170 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>

            <!-- Vaga 6: Aprendiz de Design -->
            <div class="vaga-card jovem-aprendiz-card">
                <div class="job-header">
                    <i class="fas fa-palette job-icon jovem-aprendiz-icon"></i>
                    <span class="job-difficulty jovem-aprendiz-difficulty">APRENDIZ</span>
                </div>
                <h3 class="job-title">Aprendiz de Design Gráfico</h3>
                <p class="job-company"><i class="fas fa-building"></i> Studio Visual</p>
                <p class="job-description">
                    Desenvolva sua criatividade aprendendo design gráfico, edição de imagens e criação de materiais visuais.
                </p>
                <div class="job-tags">
                    <span class="tag jovem-aprendiz-tag">Photoshop</span>
                    <span class="tag jovem-aprendiz-tag">Criatividade</span>
                    <span class="tag jovem-aprendiz-tag">Visual</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp jovem-aprendiz-xp">+190 XP</span>
                    <button class="btn-apply jovem-aprendiz-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Área VIP -->
    <section class="vip-section">
        <div class="vip-header">
            <h2 class="vip-title">
                VAGAS VIP
                <span class="vip-badge">PREMIUM</span>
            </h2>
            <p class="vip-description">Oportunidades exclusivas para membros premium</p>
        </div>
        
        <div class="vip-cards">
            <!-- VIP Card 1: Senior Full Stack -->
            <div class="vaga-card vip-card">
                <div class="job-header">
                    <i class="fas fa-laptop-code job-icon vip-icon"></i>
                    <span class="job-difficulty vip-difficulty">VIP</span>
                </div>
                <h3 class="job-title">Senior Full Stack Developer</h3>
                <p class="job-company"><i class="fas fa-building"></i> TechCorp Solutions</p>
                <p class="job-description">
                    Desenvolvedor sênior full stack para liderar projetos complexos usando React, Node.js e AWS.
                </p>
                <div class="job-tags">
                    <span class="tag vip-tag">React</span>
                    <span class="tag vip-tag">Node.js</span>
                    <span class="tag vip-tag">AWS</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp vip-xp">+1500 XP</span>
                    <button class="btn-apply vip-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
            
            <!-- VIP Card 2: DevOps Engineer -->
            <div class="vaga-card vip-card">
                <div class="job-header">
                    <i class="fas fa-server job-icon vip-icon"></i>
                    <span class="job-difficulty vip-difficulty">VIP</span>
                </div>
                <h3 class="job-title">DevOps Engineer</h3>
                <p class="job-company"><i class="fas fa-building"></i> CloudTech Inc</p>
                <p class="job-description">
                    Engenheiro DevOps especialista em Docker, Kubernetes e CI/CD para ambientes de alta disponibilidade.
                </p>
                <div class="job-tags">
                    <span class="tag vip-tag">Docker</span>
                    <span class="tag vip-tag">Kubernetes</span>
                    <span class="tag vip-tag">CI/CD</span>
                </div>
                <div class="job-footer">
                    <span class="job-xp vip-xp">+1300 XP</span>
                    <button class="btn-apply vip-apply open-login-modal">CANDIDATAR</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Informações sobre o site -->
    <section class="info-section">
        <div class="info-container">
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Segurança Garantida</h3>
                <p>Suas informações estão protegidas com criptografia de ponta</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h3>Processo Rápido</h3>
                <p>Candidature-se em segundos e receba feedback em até 48h</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Comunidade Ativa</h3>
                <p>Mais de 10.000 profissionais conectados</p>
            </div>
        </div>
    </section>
</main>