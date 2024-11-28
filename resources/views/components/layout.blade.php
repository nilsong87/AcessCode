<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O escritor de códigos feitos para você!">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
    @vite('resources/css/style.css')
    <title>Acess Code - Home</title>
</head>

<body id="home">
    <header id="home">
        <a href="/"><img src="{{ Vite::asset('resources/assets/image/logo_positivo.jpg') }}" alt="Logo" class="logo"></a>
        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#sobre-produto">Sobre Produto</a></li>
                <li><a href="#quem-somos">Quem Somos</a></li>
            </ul>
        </nav>
        <button class="login-btn" onclick="openModal()">Login</button>
        <div class="menu-icon" onclick="toggleMenu()">☰</div>
    </header>
    {{$slot}}

    <footer>
        <div class="green-line"></div>
        <div class="contact-info">
            <div class="CONTATOS">
                <p class="titulo-contato">Fale Conosco</p>
                <p><a href="mailto:acesscode@gmail.com.br?subject=Contato%20via%20site&body=Olá%20equipe%20AcessCode," class="link-verde2"><i class="bi bi-envelope-at"></i> acesscode@gmail.com.br</a></p>
                <p><a href="https://www.instagram.com/acess_code" target="_blank" class="link-verde2"><i class="bi bi-instagram"></i> @acess_code</a></p>
            </div>
            <div>
                <p class="faq-ed"><a href="faq" class="link-verde2">FAQ</a></p>
            </div>
        </div>
        <div class="footer">
            <p>© 2024 - AcessCode - Todos os direitos reservados</p>
        </div>
    </footer>

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