<?php use App\Core\Auth; ?>

<footer>

    <div class="footer-top-gradient"></div>
    
    <div class="footer-content">
        <p>&copy; <?= date('Y') ?> VD Vagas. Todos os direitos reservados.</p>
        <nav>

            <?php if(!Auth::check()): ?>

                <a href="<?= url_to('/') ?>">Início</a> |
                <a href="<?= url_to('/termos/termo') ?>">Termos de Uso</a> |
                <a href="<?= url_to('/vagas') ?>">Vagas</a> |
                <a href="<?= url_to('/about') ?>">Sobre Nós</a> |
                <a href="<?= url_to('/contato') ?>">Contato</a> |
                <a href="<?= url_to('/planos') ?>">Planos</a>

            <?php else: ?>

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
            
               

            <?php endif ?>

        </nav>
    </div>

</footer>
