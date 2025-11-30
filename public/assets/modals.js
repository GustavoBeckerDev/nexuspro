// Controle centralizado de modais
// Este arquivo controla a abertura/fechamento de modais globais e fornece
// um helper para alternar a visibilidade da senha dentro de formulários de modal.
document.addEventListener('DOMContentLoaded', () => {
    // Elementos raiz usados pela lógica de modais
    const overlay = document.getElementById('modalOverlay'); // elemento de overlay da página
    const modals = document.querySelectorAll('.modal'); // todos os diálogos/modal
    
    // Suporte para botões antigos e novos (pixel art)
    const btnLogin = document.querySelector('.btn-login, .btn-login-pixel'); // botão de abrir login no header
    const btnCadastro = document.querySelector('.btn-signup, .btn-signup-pixel'); // botão de cadastro
    const homeSignupBtn = document.querySelector('.open-signup-modal'); // botão "Experimente Grátis" na home

    // openModal(modalId)
    // - Exibe o overlay da página e o modal identificado por modalId.
    // - Usa classes CSS quando disponíveis, mas também aplica `display` inline
    //   como fallback caso a folha de estilo ainda não esteja carregada.
    // - Fecha todos os outros modais antes de abrir o novo.
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlayElement = document.getElementById('modalOverlay');

        // Primeiro, fecha todos os modais abertos
        modals.forEach(m => {
            if (m.id !== modalId) {
                m.style.display = 'none';
                m.classList.remove('active');
            }
        });

        if (overlayElement) {
            // Make overlay visible
            overlayElement.style.display = 'block';
            overlayElement.classList.add('active');
        }

        if (modal) {
            // Show the requested modal
            modal.style.display = 'block';
            modal.classList.add('active');
        } else {
            console.error(`Modal com ID '${modalId}' não encontrado.`);
        }
    }

    // closeModal(modalId)
    // - Oculta o modal e o overlay.
    // - Remove o fallback inline (`display`) para que a folha de estilo
    //   possa controlar a apresentação final quando presente.
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        const overlayElement = document.getElementById('modalOverlay');

        if (overlayElement) {
            overlayElement.classList.remove('active');
            overlayElement.style.display = '';
        }

        if (modal) {
            modal.style.display = 'none';
            modal.classList.remove('active');
        }
    }

    // Fecha todos os modais
    function closeAllModals() {
        modals.forEach(m => {
            m.style.display = 'none';
            m.classList.remove('active');
        });
        if (overlay) {
            overlay.style.display = '';
            overlay.classList.remove('active');
        }
    }

    // === GATILHOS DE ABERTURA DE MODAIS ===
    if (btnLogin) btnLogin.addEventListener('click', () => openModal('modalLogin'));
    if (btnCadastro) btnCadastro.addEventListener('click', () => openModal('modalSignup'));

    // Novo: botão "Experimente Grátis" da home também abre o modal de cadastro
    if (homeSignupBtn) {
        homeSignupBtn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('modalSignup');
        });
    }

    // Botões com classe .open-login-modal abrem o modal de login
    document.querySelectorAll('.open-login-modal').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('modalLogin');
        });
    });

    // Botões com classe .open-signup-modal abrem o modal de cadastro
    document.querySelectorAll('.open-signup-modal').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openModal('modalSignup');
        });
    });

    // Clique no overlay fecha qualquer modal aberto
    if (overlay) overlay.addEventListener('click', closeAllModals);

    // Qualquer elemento com .modal-close deve fechar todos os modais
    document.querySelectorAll('.modal-close').forEach(btn => {
        btn.addEventListener('click', closeAllModals);
    });

    // Helper para alternar um input de senha e atualizar o ícone
    // - `pwd` é o elemento input, `toggle` é o elemento do ícone/botão
    function togglePasswordInput(pwd, toggle) {
        if (!pwd || !toggle) return;
        const isPassword = pwd.getAttribute('type') === 'password';
        pwd.setAttribute('type', isPassword ? 'text' : 'password');
        // Keep the icon classes explicit for clarity
        toggle.classList.toggle('fa-eye', !isPassword);
        toggle.classList.toggle('fa-eye-slash', isPassword);
        toggle.setAttribute('aria-label', isPassword ? 'Ocultar senha' : 'Mostrar senha');
    }

    // Handler delegado para cliques em ícones toggle-password
    // Usar delegation mantém a ligação ao DOM mínima e suporta modais/
    // formulários adicionados dinamicamente no futuro.
    document.addEventListener('click', (e) => {
        const toggle = e.target.closest('.toggle-password');
        if (!toggle) return;

        // Preferir o input dentro do mesmo wrapper .input-icon para que o
        // handler funcione mesmo se existirem múltiplos formulários/modais na página.
        const wrapper = toggle.closest('.input-icon');
        let pwd = wrapper ? wrapper.querySelector('input') : null;
        if (!pwd) {
            const form = toggle.closest('form');
            pwd = form ? form.querySelector('input[type="password"], input') : document.getElementById('password');
        }

        togglePasswordInput(pwd, toggle);
    });

    // Dentro do modal de signup, o link .open-login alterna para o login modal
    document.addEventListener('click', (e) => {
        const openLogin = e.target.closest('.open-login');
        if (!openLogin) return;
        // fechar todos e abrir login
        closeAllModals();
        openModal('modalLogin');
    });

    // Dentro do modal de login, o link .open-signup alterna para o signup modal
    document.addEventListener('click', (e) => {
        const openSignup = e.target.closest('.open-signup');
        if (!openSignup) return;
        // fechar todos e abrir signup
        closeAllModals();
        openModal('modalSignup');
    });
});
