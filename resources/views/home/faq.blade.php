<x-layout>
    <section class="corpo-faq">
        <div class="faq-container">
            <h1 class="titulo-faq">FAQ</h1>
            <button class="faq-button" onclick="toggleFAQ('faq1')">O que é o AcessCode?</button>
            <div id="faq1" class="faq-content">
                <p class="texto-faq">É um sistema de introdução à aprendizagem de programação através da gamificação. A
                    partir dos jogos, o processo de aprendizado da lógica de programação e os conceitos da programação
                    se tornam mais agradáveis e eficazes, fomentando o interesse e facilitando o acesso de pessoas com
                    deficiência auditiva e surdas no mundo da tecnologia da informação (TI).</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq2')">Como funciona o AcessCode?</button>
            <div id="faq2" class="faq-content">
                <p class="texto-faq">O AcessCode traz pequenos problemas a serem solucionados através da junção das
                    peças disponibilizadas. As peças representam termos da programação e apresentam sua respectiva
                    tradução em libras. Após a solução do problema proposto, apresentamos o código.</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq3')">Qual a linguagem utilizada no AcessCode?</button>
            <div id="faq3" class="faq-content">
                <p class="texto-faq">JavaScript</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq4')">Como surgiu o AcessCode?</button>
            <div id="faq4" class="faq-content">
                <p class="texto-faq">O AcessCode é um trabalho de conclusão do curso Programador FullStack do Senac-BA.
                    O tema escolhido pela turma teve como principal característica a preocupação com a acessibilidade de
                    pessoas com deficiência auditiva e surdas no mundo da tecnologia. Como a maior parte das plataformas
                    e programas voltados à aprendizagem de programação não são voltados para essa parcela da sociedade,
                    os portadores de deficiência auditiva e surdos encontram maior dificuldade no aprendizado de
                    programação. Logo, através dessa ideia, buscamos tornar esse processo de aprendizagem mais fácil,
                    por meio de uma plataforma voltada para esse público.</p>
            </div>
        </div>
    </section>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <div id="login-container">
                <h2>Login</h2>
                <form id="login-form">
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Senha" required>
                    <button type="submit">Entrar</button>
                </form>
                <div class="toggle-link">
                    <a href="#" onclick="toggleForm()">Não tem uma conta? Cadastre-se</a>
                </div>
            </div>
            <div id="register-container" style="display: none;">
                <h2>Cadastre-se</h2>
                <form id="register-form">
                    <input type="text" placeholder="Nome" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Senha" required>
                    <button type="submit">Cadastrar</button>
                </form>
                <div class="toggle-link">
                    <a href="#" onclick="toggleForm()">Já tem uma conta? Login</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
@vite('resources/js/script.js')
</body>
</html>
