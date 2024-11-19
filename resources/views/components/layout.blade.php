<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o idioma do documento como português do Brasil -->

<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para o documento -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Define a viewport para dispositivos móveis -->
    <meta name="description" content="O escritor de códigos feitos para você!"> <!-- Descrição da página -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" /> <!-- Link para o arquivo CSS dos ícones do Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap"> <!-- Importa a fonte Nova Square do Google Fonts -->
    @vite('resources/css/style.css')
    @vite('resources/css/gamea.css') <!-- Link para o arquivo CSS de estilos específicos -->
    <title>Acess Code - Home</title> <!-- Título da página -->
</head>

<body id="home"> <!-- Define o ID do corpo da página como 'home' -->
    <header id="home"> <!-- Cabeçalho da página com ID 'home' -->
        <a href="#home"><img src="{{Vite::asset('resources/assets/image/logo_positivo.jpg') }}" alt="Logo" class="logo"></a> <!-- Logo com link para o topo da página -->

        <nav> <!-- Navegação principal -->
            <ul class="nav-links"> <!-- Lista de links de navegação -->
                <li><a href="/">Home</a></li> <!-- Link para a seção 'home' -->
                <li><a href="#sobre-produto">Sobre Produto</a></li> <!-- Link para a seção 'sobre-produto' -->
                <li><a href="#quem-somos">Quem Somos</a></li> <!-- Link para a seção 'quem-somos' -->
            </ul>
        </nav>
        <button class="login-btn" onclick="openModal()">Login</button> <!-- Botão de login que abre o modal -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div> <!-- Ícone do menu para dispositivos móveis -->
    </header>
    {{$slot}}

    <footer>
        <!-- Linha verde decorativa -->
        <div class="green-line"></div>

        <!-- Informações de contato -->
        <div class="contact-info">
            <!-- Seção de contatos com email e Instagram -->
            <div class="CONTATOS">
                <p class="titulo-contato">Fale Conosco</p>
                <p><a href="mailto:acesscode@gmail.com.br?subject=Contato%20via%20site&body=Olá%20equipe%20AcessCode,"
                        class="link-verde2"><i class="bi bi-envelope-at"></i> acesscode@gmail.com.br</a></p>
                <p><a href="https://www.instagram.com/acess_code" target="_blank" class="link-verde2"><i class="bi bi-instagram"></i> @acess_code</a></p>
            </div>
            <!-- Link para a página de FAQ -->
            <div>
                <p class="faq-ed"><a href="faq" class="link-verde2">FAQ</a></p>
            </div>
        </div>

        <!-- Rodapé com direitos reservados -->
        <div class="footer">
            <p>© 2024 - AcessCode - Todos os direitos reservados</p>
        </div>
        </div>
    </footer>

    <div vw class="enabled"> <!-- Plugin de acessibilidade VLibras -->
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script> <!-- Script para o plugin VLibras -->
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    @vite('resources/js/*.js') <!-- Link para o arquivo JavaScript -->
</body>

</html>