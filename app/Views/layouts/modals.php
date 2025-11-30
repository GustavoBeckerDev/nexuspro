<!-- Fundo de opacidade -->
<div class="modal-overlay" id="modalOverlay"></div>

<!-- ============================================================================================================== -->

<!-- Modal Login -->

<div class="modal" id="modalLogin" role="dialog" aria-labelledby="modalLoginTitle" aria-modal="true">
    <div id="login" class="modal-content">
        <button class="modal-close" aria-label="Fechar modal">&times;</button>

        <h2 id="modalLoginTitle" class="modal-title">ACESSO AO SISTEMA</h2>
        <p class="modal-subtitle">> Insira suas credenciais de acesso_</p>

        <form id="loginForm" method="POST" action="<?= url_to('/auth/login')?>">
            <div class="form-group">
                <label for="email" class="text-left">Email:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-envelope input-icon-left" aria-hidden="true"></i>
                    <input type="email" id="email" name="email" placeholder="seuemail@email.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="text-left">Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="password" name="senha" placeholder="****" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
            </div>

            <button type="submit" class="login-button btn-primary">Login</button>

            
            <p class="signup-link">Não tem uma conta? <a href="#" class="open-signup">Cadastre-se</a></p>
        </form>
    </div>
</div>

<!-- ============================================================================================================== -->

<!-- Modal de Cadastro -->

<div class="modal" id="modalSignup" role="dialog" aria-labelledby="modalSignupTitle" aria-modal="true">
    <div id="cadastro" class="modal-content">
        <button class="modal-close" aria-label="Fechar modal">&times;</button>

        <h2 id="modalSignupTitle" class="modal-title">NOVO USUÁRIO</h2>
        <p class="modal-subtitle">> Registre-se para começar sua jornada_</p>

        <form id="signupForm" action="<?= url_to('/dashboard/usercreate')?>" method="POST">

            <div class="form-group">
                <label class="text-left">Nome:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-user input-icon-left" aria-hidden="true"></i>
                    <input type="text" id="nome" name="nome" placeholder="Informe seu nome completo" required>
                </div>
            </div>

            <div class="form-group">
                <label for="signupEmail" class="text-left">Email:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-envelope input-icon-left" aria-hidden="true"></i>
                    <input type="email" id="email" name="email" placeholder="seuemail@email.com" required>
                </div>
            </div>

            <div class="form-group">
                <label for="signupPassword" class="text-left">Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="senha" name="senha" placeholder="****" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="signupPasswordConfirm" class="text-left">Confirmar Senha:</label>
                <div class="input-icon">
                    <i class="fa-solid fa-lock input-icon-left" aria-hidden="true"></i>
                    <input type="password" id="c_senha" name="c_senha" placeholder="****" required>
                    <i class="fa-solid fa-eye input-icon-right toggle-password" role="button" aria-label="Mostrar senha"></i>
                </div>
            </div>

            <div class="signup-type">
                <label class="signup-type-item">
                    <input type="radio" name="tipo" id="f" value="f" checked> Candidato
                </label>
                <label class="signup-type-item">
                    <input type="radio" name="tipo" id="j" value="j"> Empresa
                </label>
            </div>

            <button type="submit" class="login-button btn-primary">Criar Conta</button>

            <p class="signup-link">Já tem uma conta? <a href="#" class="open-login">Faça login</a></p>
        </form>
    </div>
</div>

<!-- ============================================================================================================== -->