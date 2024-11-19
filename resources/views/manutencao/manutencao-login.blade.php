<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Acess Code - Página de Manutenção"> <!-- Descrição da página -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> <!-- Link para o CSS do Bootstrap -->
  @vite('resources/css/app.css') <!-- Link para o arquivo CSS personalizado -->
  <title>Acess Code - Login / Manutenção</title> <!-- Título da página -->
</head>
<body class="bg-black"> <!-- Define a cor de fundo do corpo da página -->
  <div class="container border-green"> <!-- Container principal com borda verde -->
    <div class="header-app5"> <!-- Cabeçalho da aplicação -->
      <a href="/"><img class="img-logo4" src="{{Vite::asset('resouces/assets/image/logo-positivo.jpg')}}" alt="imagem do logo"></a> <!-- Logo com link para a página inicial -->
      <div class="fonte4">
        <p class="titulo-pagm">Manutenção da Página</p> <!-- Título da página -->
      </div>
    </div>
    <div class="row justify-content-center"> <!-- Linha centralizada -->
      <div class="col-md-4"> <!-- Coluna de largura média -->

        <h2 class="text-center styled-title">
          <h1 class="titulo-log">Acess Code - Login</h1> <!-- Título do formulário de login -->
        </h2>
        <form id="loginForm"> <!-- Formulário de login -->
          <div class="mb-3"> <!-- Margem inferior -->
            <label for="username" class="form-label text-white">Usuário</label> <!-- Rótulo para o campo de usuário -->
            <input type="text" class="form-control" id="username" required> <!-- Campo de entrada para o usuário -->
          </div>
          <div class="mb-3"> <!-- Margem inferior -->
            <label for="password" class="form-label text-white">Senha</label> <!-- Rótulo para o campo de senha -->
            <input type="password" class="form-control" id="password" required> <!-- Campo de entrada para a senha -->
          </div>
          <button type="submit" class="btn btn-primary">Entrar</button> <!-- Botão de envio do formulário -->
        </form>
      </div>
    </div>
  </div>

  <br>
  <div class="d-flex justify-content-center"> <!-- Div centralizada -->
    <img class="tema border-green" src="{{Vite::asset('resources/assets/image/manutenção.jpg') }}" alt="tema da pagina"> <!-- Imagem de manutenção -->
  </div>
  <div vw class="enabled"> <!-- Plugin de acessibilidade VLibras -->
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script> <!-- Script para o plugin VLibras -->
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app'); <!-- Inicializa o plugin VLibras -->
</script>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Previne o envio padrão do formulário
      const username = document.getElementById('username').value; // Obtém o valor do campo de usuário
      const password = document.getElementById('password').value; // Obtém o valor do campo de senha

      // Simulação de autenticação
      if (username === 'admin' && password === 'admin') { // Verifica se o usuário e a senha são 'admin'
        window.location.href = 'manutencao.html'; // Redireciona para a página de manutenção
      } else {
        alert('Usuário ou senha incorretos'); // Exibe um alerta se a autenticação falhar
      }
    });
  </script>

</body>
</html>
