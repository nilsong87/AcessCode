<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <meta name="description" content="O escritor de códigos feitos para você!"> <!-- Descrição da página -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  @vite('resources/css/style.css')
  @vite('resources/css/gamea.css')
  <title>Acess Code - Aplicativo</title>
</head>
<body>
  <div class="game-board">
    <div class="header-app">
      <a href="/"><img class="img-logo" src="{{ Vite::asset('resources/assets/image/logo-positivo-fotor-2024100820480.jpg') }}" alt="imagem do logo"></a>
      <nav>
        <div class="pecas" id="blocks-container">

        </div>
      </nav>
      <p class="blocos">Blocos de código</p>
      <div class="fonte">
        <p class="bg-white"><i class="bi bi-folder"></i> <button onclick="loadProgress()" class="link-verde1">Carregar Progresso</button></p>
        <p class="bg-white"><i class="bi bi-floppy"></i> <button onclick="saveProgress()" class="link-verde1">Salvar Progresso</button></p>
        <p class="header-header"><a href="/" class="link-verde">home<i class="bi bi-house-door"></i></a></p>
        <p class="icon"><a href="" class="link-verde">ajuda<i class="bi bi-info-circle"></i></a></p>
      </div>
    </div>
    <div class="area-de-montagem">Área de Montagem
      <div class="dropzone" id="dropzone"></div>
      <button onclick="execute()">Executar</button>
      <button onclick="showCode()">Ver Código</button>
      <button onclick="resetGame()">Resetar</button>
      <p id="result"></p>
    </div>
    <div class="video">Tradução do Código
    </div>
    <div class="info">Código das Operações (JavaScript)
      <div class="codigo-gerado" id="codeContainer">
        <h2>Código Gerado</h2>
        <pre id="codeDisplay"></pre>
      </div>
    </div>
  </div>

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
  @vite('resources/js/gamea.js')
</body>
</html>
