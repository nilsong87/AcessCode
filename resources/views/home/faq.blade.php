<x-layout>
    <section class="corpo-faq"> <!-- Seção principal do FAQ -->
        <div class="faq-container"> <!-- Container do FAQ -->
            <h1 class="titulo-faq">FAQ</h1> <!-- Título do FAQ -->
            <button class="faq-button" onclick="toggleFAQ('faq1')">O que é o AcessCode?</button> <!-- Botão para a primeira pergunta do FAQ -->
            <div id="faq1" class="faq-content"> <!-- Conteúdo da primeira pergunta do FAQ -->
                <p class="texto-faq">É um sistema de introdução à aprendizagem de programação através da gamificação. A
                    partir dos jogos, o processo de aprendizado da lógica de programação e os conceitos da programação
                    se tornam mais agradáveis e eficazes, fomentando o interesse e facilitando o acesso de pessoas com
                    deficiência auditiva e surdas no mundo da tecnologia da informação (TI).</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq2')">Como funciona o AcessCode?</button> <!-- Botão para a segunda pergunta do FAQ -->
            <div id="faq2" class="faq-content"> <!-- Conteúdo da segunda pergunta do FAQ -->
                <p class="texto-faq">O AcessCode traz pequenos problemas a serem solucionados através da junção das
                    peças disponibilizadas. As peças representam termos da programação e apresentam sua respectiva
                    tradução em libras. Após a solução do problema proposto, apresentamos o código.</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq3')">Qual a linguagem utilizada no AcessCode?</button> <!-- Botão para a terceira pergunta do FAQ -->
            <div id="faq3" class="faq-content"> <!-- Conteúdo da terceira pergunta do FAQ -->
                <p class="texto-faq">JavaScript</p>
            </div>

            <button class="faq-button" onclick="toggleFAQ('faq4')">Como surgiu o AcessCode?</button> <!-- Botão para a quarta pergunta do FAQ -->
            <div id="faq4" class="faq-content"> <!-- Conteúdo da quarta pergunta do FAQ -->
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

    <div id="loginModal" class="modal"> <!-- Modal de login -->
        <div class="modal-content"> <!-- Conteúdo do modal -->
            <span class="close" onclick="closeModal()">×</span> <!-- Botão para fechar o modal -->
            <div id="login-container"> <!-- Container de login -->
                <h2>Login</h2> <!-- Título do login -->
                <form id="login-form"> <!-- Formulário de login -->
                    <input type="email" placeholder="Email" required> <!-- Campo de email -->
                    <input type="password" placeholder="Senha" required> <!-- Campo de senha -->
                    <button type="submit">Entrar</button> <!-- Botão de submit -->
                </form>
                <div class="toggle-link"> <!-- Link para alternar entre login e cadastro -->
                    <a href="#" onclick="toggleForm()">Não tem uma conta? Cadastre-se</a>
                </div>
            </div>
            <div id="register-container" style="display: none;"> <!-- Container de cadastro, inicialmente escondido -->
                <h2>Cadastre-se</h2> <!-- Título do cadastro -->
                <form id="register-form"> <!-- Formulário de cadastro -->
                    <input type="text" placeholder="Nome" required> <!-- Campo de nome -->
                    <input type="email" placeholder="Email" required> <!-- Campo de email -->
                    <input type="password" placeholder="Senha" required> <!-- Campo de senha -->
                    <button type="submit">Cadastrar</button> <!-- Botão de submit -->
                </form>
                <div class="toggle-link"> <!-- Link para alternar entre cadastro e login -->
                    <a href="#" onclick="toggleForm()">Já tem uma conta? Login</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
    <div vw class="enabled"> <!-- Plugin de acessibilidade VLibras -->
   

 <!-- Link para o arquivo JavaScript -->

</body>

</html>
