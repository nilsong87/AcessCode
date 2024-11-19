<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" /> <!-- Define a codificação de caracteres como UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Configura a viewport para responsividade -->

  <!-- Links para arquivos CSS personalizados e fontes do Google -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap">

  <!-- Links para o CSS do Bootstrap 5 e ícones do Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <meta name="description" content="Acess Code - Página de Manutenção"> <!-- Descrição da página -->

  <!-- Links para o CSS do Bootstrap 4 e ícones do Bootstrap 4 -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Links para jQuery, Popper.js e Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @vite('resources/css/app.css')
  <title>Acess Code - Manutenção</title> <!-- Título da página -->
</head>
<body>
  <div class="corpo4"> <!-- Div principal do corpo da página -->
    <div class="header-app4"> <!-- Cabeçalho da aplicação -->
      <a href="/"><img class="img-logo4" src="{{Vite::asset('resources/assets/image/logo_negativo.jpg')}}" alt="imagem do logo"></a> <!-- Logo com link para a página inicial -->
      <div class="fonte4">
        <p class="header-header4"><a href="/" class="link-verde">logout<i class="bi bi-box-arrow-right"></i></a></p> <!-- Link para logout com ícone -->
      </div>
    </div>
    <h1 class="titulo-niveis">Manutenção de Níveis</h1> <!-- Título principal da página -->
    <div class="area-de-montagem4">
      <!-- Menu de barra de escolha para filtrar por nível -->
      <div class="filter-select">
        <select class="form-select" onchange="filterFiles(this.value)"> <!-- Menu de seleção para filtrar arquivos por nível -->
          <option value="all">Todos</option>
          <option value="1">Nível 1</option>
          <option value="2">Nível 2</option>
          <option value="3">Nível 3</option>
        </select>
      </div>

      <!-- Área para exibir o arquivo e a descrição lado a lado -->
      <div id="fileDisplayArea" class="info-container">
        <!-- Conteúdo dinâmico será exibido aqui -->
      </div>

      <!-- Botões para abrir os modais -->
      <div class="modal-area">
        <button type="button" class="btn btn-primary rounded-circle modal-button" data-toggle="modal" data-target="#exampleModal" style="background-color: rgb(0, 196, 0); border-color: rgb(64, 128, 0);">
          <i class="bi bi-plus"></i> <!-- Ícone de adição -->
        </button>
      </div>

      <!-- Modal para carregar arquivo -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Carregar Arquivo</h5> <!-- Título do modal -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span> <!-- Botão para fechar o modal -->
              </button>
            </div>
            <div class="modal-body">
              <form id="uploadForm"> <!-- Formulário de upload -->
                <div class="form-group">
                  <label for="fileInput">Escolha o arquivo</label> <!-- Rótulo para o campo de arquivo -->
                  <input type="file" class="form-control-file" id="fileInput"> <!-- Campo de entrada para o arquivo -->
                </div>
                <div class="form-group">
                  <label for="fileDescription">Descrição do arquivo</label> <!-- Rótulo para a descrição do arquivo -->
                  <textarea class="form-control" id="fileDescription" rows="3"></textarea> <!-- Campo de texto para a descrição -->
                </div>
                <div class="form-group">
                  <label for="levelSelect">Selecione o nível</label> <!-- Rótulo para a seleção do nível -->
                  <select class="form-control" id="levelSelect"> <!-- Menu de seleção para o nível -->
                    <option value="1">Nível 1</option>
                    <option value="2">Nível 2</option>
                    <option value="3">Nível 3</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> <!-- Botão para fechar o modal -->
              <button type="button" class="btn btn-primary" onclick="saveFile()">Salvar</button> <!-- Botão para salvar o arquivo -->
            </div>
          </div>
        </div>
      </div>

      <div class="file-list" id="fileList"></div> <!-- Lista de arquivos -->
    </div>
  </div>
  <div vw class="enabled"> <!-- Plugin de acessibilidade VLibras -->
    <div vw-access-button class="active" id="vlibras-button"></div> <!-- Botão de acessibilidade VLibras -->
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script> <!-- Script para o plugin VLibras -->
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app'); <!-- Inicializa o plugin VLibras -->
  </script>
  @vite('resources/js/script.js') <!-- Link para o arquivo JavaScript personalizado -->
</body>
</html>
