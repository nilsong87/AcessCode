<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="description" content="Acess Code - Página de Manutenção">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@vite('resources/css/style.css')
<title>Acess Code - Manutenção</title>
</head>

<body>
  <div class="corpo4">
    <div class="header-app4">
      <a href="/"><img class="img-logo4" src="{{ Vite::asset('resources/assets/image/logo-positivo-fotor-2024100820480.jpg') }}" alt="imagem do logo"></a>
      <div class="fonte4">
        <p class="header-header4"><a href="{{ route('logout') }}" class="link-verde" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout<i class="bi bi-box-arrow-right"></i></a></p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
    <h1 class="titulo-niveis">Manutenção de Níveis</h1>
    <div class="area-de-montagem4">
      <div class="filter-select">
        <select class="form-select" onchange="filterFiles(this.value)">
          <option value="all">Todos</option>
          <option value="1">Nível 1</option>
          <option value="2">Nível 2</option>
          <option value="3">Nível 3</option>
        </select>
      </div>
      <div id="fileDisplayArea" class="info-container">
        <!-- Conteúdo dinâmico será exibido aqui -->
      </div>
      <div class="modal-area">
        <button type="button" class="btn btn-primary rounded-circle modal-button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: rgb(0, 196, 0); border-color: rgb(64, 128, 0);">
          <i class="bi bi-plus"></i>
        </button>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Carregar Arquivo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="uploadForm">
                <div class="form-group">
                  <label for="fileInput">Escolha o arquivo</label>
                  <input type="file" class="form-control-file" id="fileInput">
                </div>
                <div class="form-group">
                  <label for="fileDescription">Descrição do arquivo</label>
                  <textarea class="form-control" id="fileDescription" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="levelSelect">Selecione o nível</label>
                  <select class="form-control" id="levelSelect">
                    <option value="1">Nível 1</option>
                    <option value="2">Nível 2</option>
                    <option value="3">Nível 3</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary" onclick="saveFile()">Salvar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="file-list" id="fileList"></div>
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
  @vite('resources/js/script.js')
</body>

</html>