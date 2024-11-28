<x-layout>

    <main class="main-container"> <!-- Conteúdo principal da página -->
        <img class="main-ft" src="{{ Vite::asset('resources/assets/image/pexels-cottonbro-6321244.jpg') }}" alt="Imagem do main"> <!-- Imagem principal -->
        <div class="folder" id="folder"> <!-- Div para o folder -->
            <button class="close-folder" onclick="closeFolder()">×</button> <!-- Botão para fechar o folder -->
            <h2 class="titulo-folder">Experimente Nosso Aplicativo!</h2> <!-- Título do folder -->
            <p class="texto-folder"> <!-- Texto do folder -->
                Estamos comprometidos em promover a acessibilidade para a comunidade
                com perda auditiva parcial ou total. Experimente nosso aplicativo de
                programação e descubra como podemos ajudar você a aprender a programar
                de forma inclusiva e acessível.
            </p>
            <button class="login-btn" onclick="window.location.href='app.html';">Teste Agora</button> <!-- Botão para testar o aplicativo -->
        </div>
    </main>

    <section class="sobre-produto" id="sobre-produto"> <!-- Seção sobre o produto -->
        <div class="lado-esquerdo"> <!-- Div do lado esquerdo -->
            <div>
                <h2 class="titulo-sobre">Sobre o produto</h2> <!-- Título da seção -->
                <p class="texto-sobre"> <!-- Texto sobre o produto -->
                    Comprometidos a promover a acessibilidade para a comunidade
                    com perda auditiva parcial ou total, desenvolvemos o
                    Acesscode com o propósito de democratizar o acesso ao mundo
                    da programação.
                </p>
                <br>
                <p class="texto-sobre"> <!-- Texto adicional sobre o produto -->
                    Com uma linguagem adequada e inclusiva, estamos ao seu lado
                    nessa jornada de aula no conhecimento e na arte de programar.
                </p>
            </div>

            <button class="login-btn" onclick="window.location.href='app.html';">Acess Code</button> <!-- Botão para acessar o aplicativo -->
        </div>

        <div class="lado-direito"> <!-- Div do lado direito -->
            <div class="fundo-verde"> <!-- Div com fundo verde -->
                <img src="{{ Vite::asset('resources/assets/image/pexels-cottonbro-6321925.jpg') }}" alt="Imagem de fundo Programadores" class="imagem-fundo"> <!-- Imagem de fundo -->
            </div>
            <a href="#home"><img src="{{ Vite::asset('resources/assets/image/99.jpg') }}" alt="Logo" class="logo-negativo"></a> <!-- Logo com link para o topo da página -->
        </div>
    </section>

    <section class="quem-somos" id="quem-somos"> <!-- Seção 'quem somos' -->
        <div class="quem-somos1">
            <img src="{{ Vite::asset('resources/assets/image/icone_libras positivo.jpg') }}" class="imagem-centralizada" alt="Simbolo de Líbras"> <!-- Imagem centralizada com ícone de Libras -->
            <h1 class="titulo-q">Quem Somos</h1> <!-- Título principal da seção -->
            <p class="texto-q"> <!-- Parágrafo descrevendo a missão dos alunos do curso de Programador FullStack do Senac Bahia -->
                Somos alunos da turma 2024 do curso de Programador FullStack do Senac Bahia.
                Para nós, programar não é apenas uma questão de desenvolver funcionalidades incríveis,
                mas também de garantir que essas funcionalidades sejam acessíveis a todos, independentemente
                de limitações físicas, sensoriais ou cognitivas.
            </p>
            <h2 class="titulo2-q">Time de Desenvolvimento</h2> <!-- Título secundário para a seção do time de desenvolvimento -->
            <div class="carousel-container"> <!-- Container do carrossel de imagens -->
                <div class="carousel"> <!-- Carrossel que contém várias caixas com informações dos desenvolvedores -->
                    <div class="carousel-box"> <!-- Caixa do carrossel com imagem e informações do desenvolvedor -->
                        <img src="{{ Vite::asset('resources/assets/image/nilson 01 - sunset.jpg') }}" class="img-c" alt="Funcionário 1">
                        <p class="nome-func">Nilson Gomes</p>
                        <p class="func-func">Desenvolvedor Líder</p>
                        <a href="https://www.linkedin.com/in/nilson-gomes-dv/" target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/nilsong87" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <!-- Repetição das caixas do carrossel para outros desenvolvedores -->
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/fabiana.jpg') }}" class="img-c" alt="Funcionário 2">
                        <p class="nome-func">Fabiana Carvalho</p>
                        <p class="func-func">Desenvolvedora / Designer</p>
                        <a href="https://www.linkedin.com/in/fabiana-carvalho-5571b02b7/" target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/eficarvalho" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/marcelo.jpg') }}" class="img-c" alt="Funcionário 3">
                        <p class="nome-func">Marcelo Cranio</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/MarceloJPereira" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/mauricio.jpg') }}" class="img-c" alt="Funcionário 4">
                        <p class="nome-func">Mauricio Flávio</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/mauricioflavio0814" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/ane.jpg') }}" class="img-c" alt="Funcionário 10">
                        <p class="nome-func">Eliane Vasconcellos</p>
                        <p class="func-func">Desenvolvedora</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/pablo.jpg') }}" class="img-c" alt="Funcionário 8">
                        <p class="nome-func">Pablo Gabriel</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a href="https://www.linkedin.com/in/pablo-gabriel-9861b3227/" target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/Pablo-Gabriel-alkk" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/george.jpg') }}" class="img-c" alt="Funcionário 9">
                        <p class="nome-func">George Jordan</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a href="https://www.linkedin.com/in/george-jordan-9468a4332/" target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/GeorgeJordanReis" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/99.jpg') }}" class="img-c" alt="Funcionário 11">
                        <p class="nome-func">Giselle Vasconcellos</p>
                        <p class="func-func">Desenvolvedora</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/99.jpg') }}" class="img-c" alt="Funcionário 6">
                        <p class="nome-func">Vitor Andrade</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/Leal410" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>           

                    <div class="carousel-box">
                        <img src="{{ Vite::asset('resources/assets/image/99.jpg') }}" class="img-c" alt="Funcionário 7">
                        <p class="nome-func">Leonardo Sena</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a href=" https://br.linkedin.com/in/leo-sena-3845a92a6 " target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/Leo-16inc" target="_blank" class="link-roxo">
                            <p class="func-func"><i class="bi bi-github"></i></p>
                        </a>
                    </div>
                    
                    <!-- Adicionar mais caixas conforme necessário -->
                </div>
                <div class="carousel-buttons"> <!-- Botões para navegação no carrossel -->
                    <button id="prevBtn"><</button>
                            <button id="nextBtn">></button>
                </div>
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