<x-layout>

    <main class="main-container"> <!-- Conteúdo principal da página -->
        <img class="main-ft" src="{{ Vite::asset('resources/assets/image/pexels-cottonbro-6321244.jpg') }}" alt="Imagem do main"> <!-- Imagem principal -->
        <div class="frase-container">
            <p class="frase-main">A diversidade é <br> a força que impulsiona <br> a inovação</p>
        </div>
        <div class="folder" id="folder"> <!-- Div para o folder -->
            <button class="close-folder" onclick="closeFolder()">×</button> <!-- Botão para fechar o folder -->
            <h2 class="titulo-folder">Experimente Nosso Aplicativo!</h2> <!-- Título do folder -->
            <p class="texto-folder"> <!-- Texto do folder -->
                🎮 Aprenda Programação Jogando: Jogo de Blocos em JavaScript! 🌟
                <br>
                <br>
                🔹 Crie, Aprenda e Explore 🔹
                <br>
                Descubra o emocionante mundo da programação com nosso jogo de blocos! Este jogo foi desenvolvido especialmente para pessoas com deficiência auditiva,
                garantindo que todos tenham acesso a uma forma divertida e interativa de aprender JavaScript.
                <br>
                <br>
                👉 Entre nessa jornada de aprendizado inclusivo! Entre agora e comece a codificar!
            </p>
            <button class="login-btn" onclick="window.location.href='{{ route('app') }}';">Teste Agora</button> <!-- Botão para testar o aplicativo -->
        </div>
    </main>

    <section class="sobre-produto" id="sobre-produto"> <!-- Seção sobre o produto -->
        <div class="lado-esquerdo"> <!-- Div do lado esquerdo -->
            <div>
                <h2 class="titulo-sobre">Sobre o produto</h2> <!-- Título da seção -->
                <p class="texto-sobre"> <!-- Texto sobre o produto -->
                    Comprometidos a promover a acessibilidade para a comunidade com perda auditiva parcial ou total,
                    desenvolvemos o Acesscode com o propósito de democratizar o acesso ao mundo da programação.
                </p>
                <br>
                <p class="texto-sobre"> <!-- Texto adicional sobre o produto -->
                    Nossa missão é criar um ambiente inclusivo onde todos, independentemente de suas limitações auditivas,
                    possam explorar e dominar a arte da programação. Com o Acesscode, estamos redefinindo o que significa aprender a programar,
                    tornando a experiência de aprendizado mais acessível e acolhedora para todos.
                </p>
                <br>
                <p class="texto-sobre">
                    Convidamos você a se juntar à nossa comunidade e descobrir como a programação pode ser acessível,
                    inclusiva e divertida. Com o Acesscode, estamos moldando o futuro da educação em tecnologia,
                    onde todos têm a chance de brilhar. 🚀</p>
            </div>

            <button class="login-btn" onclick="window.location.href='{{ route('app') }}';">Acess Code</button> <!-- Botão para acessar o aplicativo -->
        </div>

        <div class="lado-direito"> <!-- Div do lado direito -->
            <div class="fundo-verde"> <!-- Div com fundo verde -->
                <img src="{{ Vite::asset('resources/assets/image/pexels-cottonbro-6321925.jpg') }}" alt="Imagem de fundo Programadores" class="imagem-fundo"> <!-- Imagem de fundo -->
            </div>
            <a href="#home"><img src="{{ Vite::asset('resources/assets/image/logo-positivo-fotor-2024100820480.jpg') }}" alt="Logo" class="logo-negativo"></a> <!-- Logo com link para o topo da página -->
        </div>
    </section>

    <section class="quem-somos" id="quem-somos"> <!-- Seção 'quem somos' -->
        <div class="quem-somos1">
            <img src="{{ Vite::asset('resources/assets/image/icone_libras positivo.jpg') }}" class="imagem-centralizada" alt="Simbolo de Líbras"> <!-- Imagem centralizada com ícone de Libras -->
            <h1 class="titulo-q">Quem Somos</h1> <!-- Título principal da seção -->
            <p class="texto-q"> <!-- Parágrafo descrevendo a missão dos alunos do curso de Programador FullStack do Senac Bahia -->
                Somos alunos da turma de 2024 do curso de Programador FullStack do Senac Bahia.
                Para nós, programar vai além de simplesmente desenvolver funcionalidades incríveis.
                É sobre garantir que essas funcionalidades sejam acessíveis a todos, independentemente de limitações físicas, sensoriais ou cognitivas.
                Nossa missão é criar um ambiente inclusivo e acolhedor, onde cada linha de código contribua para um mundo mais igualitário e acessível.
                Acreditamos que a tecnologia deve ser um recurso democratizado, capaz de empoderar pessoas de todas as capacidades e origens.
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
                        <p class="nome-func">Marcelo Pereira</p>
                        <p class="func-func">Desenvolvedor / Game Developer</p>
                        <a target="_blank" class="link-cinza">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/MarceloJPereira" target="_blank" class="link-roxo">
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
                        <img src="{{ Vite::asset('resources/assets/image/victor.jpg') }}" class="img-c" alt="Funcionário 6">
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
                        <img src="{{ Vite::asset('resources/assets/image/neidison.jpg') }}" class="img-c" alt="Funcionário 7">
                        <p class="nome-func">Neidson Vieira</p>
                        <p class="func-func">Desenvolvedor</p>
                        <a href=" https://www.linkedin.com/in/neidson-vieira-7ba6a9ba/ " target="_blank" class="link-azul">
                            <p class="func-func"><i class="bi bi-linkedin"></i></p>
                        </a>
                        <a href="https://github.com/Neizen071" target="_blank" class="link-roxo">
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

    <script>
        /* Menu do Header */
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links'); // Seleciona o elemento com a classe 'nav-links'
            navLinks.classList.toggle('active'); // Alterna a classe 'active' no elemento selecionado
        }

        /* Folder */
        function closeFolder() {
            document.getElementById('folder').style.display = 'none'; // Esconde o folder
        }

        window.onclick = function(event) {
            const modal = document.getElementById('loginModal'); // Seleciona o modal de login
            if (event.target === modal) { // Verifica se o clique foi fora do modal
                closeModal(); // Fecha o modal
            }
        }

    
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-box');
    const totalSlides = slides.length;
    const slideWidth = slides[0].offsetWidth; // Largura de cada slide
    const carousel = document.querySelector('.carousel');
    let slideInterval; // Declarar a variável globalmente

    function nextSlide() {
        currentSlide++;
        if (currentSlide >= totalSlides - 2) {
            currentSlide = 0;
            carousel.style.transition = 'none';
            carousel.style.transform = `translateX(0px)`;
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease-in-out';
                showSlide();
            }, 50);
            return;
        }
        showSlide();
    }

    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = totalSlides - 3;
            carousel.style.transition = 'none';
            carousel.style.transform = `translateX(${-slideWidth * currentSlide}px)`;
            setTimeout(() => {
                carousel.style.transition = 'transform 0.5s ease-in-out';
                showSlide();
            }, 50);
            return;
        }
        showSlide();
    }

    function showSlide() {
        const newTransformValue = -slideWidth * currentSlide;
        carousel.style.transform = `translateX(${newTransformValue}px)`;
    }

    // Event Listeners para os botões
    const prevButton = document.getElementById('prevBtn');
    const nextButton = document.getElementById('nextBtn');

    prevButton.addEventListener('click', () => {
        prevSlide();
        resetInterval();
    });

    nextButton.addEventListener('click', () => {
        nextSlide();
        resetInterval();
    });

    // Iniciar carrossel automático
    slideInterval = setInterval(nextSlide, 3000); // Muda a cada 3 segundos

    // Pausar carrossel ao passar o mouse
    const carouselContainer = document.querySelector('.carousel-container');
    carouselContainer.addEventListener('mouseover', () => {
        clearInterval(slideInterval);
    });

    // Continuar carrossel ao retirar o mouse
    carouselContainer.addEventListener('mouseout', () => {
        resetInterval();
    });

    // Função para resetar o intervalo
    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 3000);
    }
 
    </script>
</x-layout>