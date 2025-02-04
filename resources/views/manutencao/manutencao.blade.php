<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Acess Code - Página de Manutenção">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Coda:wght@400;800&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  @vite('resources/css/manutencao.css')
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
                  <input type="file" class="form-control-file" id="fileInput" accept="image/*">
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

  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    window.addEventListener('load', function() {
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  @vite('resources/js/script.js')
  <script>
    function saveFile() {
      const fileInput = document.getElementById('fileInput');
      const fileDescription = document.getElementById('fileDescription').value;
      const levelSelect = document.getElementById('levelSelect').value;

      if (fileInput.files.length === 0) {
        alert('Por favor, escolha um arquivo.');
        return;
      }

      const file = fileInput.files[0];
      const formData = new FormData();
      formData.append('file', file);
      formData.append('description', fileDescription);
      formData.append('level', levelSelect);

      fetch('/upload-endpoint', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          alert('Arquivo salvo com sucesso!');
          // Atualizar a lista de arquivos ou fazer outras ações necessárias
        })
        .catch(error => {
          console.error('Erro ao salvar o arquivo:', error);
          alert('Erro ao salvar o arquivo.');
        });
    }

    function filterFiles(level) {
      // Lógica para filtrar arquivos com base no nível selecionado
      const fileList = document.getElementById('fileList');
      // Atualizar a exibição dos arquivos de acordo com o nível
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Função para salvar o arquivo
        window.saveFile = function() {
            const fileInput = document.getElementById('fileInput');
            const fileDescription = document.getElementById('fileDescription').value;
            const levelSelect = document.getElementById('levelSelect').value;
            const fileList = document.getElementById('fileList');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const fileContent = e.target.result;
                    const fileItem = document.createElement('div');
                    fileItem.classList.add('file-item', 'border', 'p-3', 'mb-2');
                    fileItem.setAttribute('data-level', levelSelect);
                    fileItem.innerHTML = `
                        <h5>Arquivo: ${file.name}</h5>
                        <p>Descrição: ${fileDescription}</p>
                        <p>Nível: ${levelSelect}</p>
                        <p>Data: ${new Date().toLocaleDateString()}</p>
                        ${file.type.startsWith('image/') ? `<img src="${fileContent}" alt="${file.name}" class="img-fluid">` : `<p><i class="bi bi-exclamation-triangle-fill"></i> ERROR</p>`}
                        <button class="btn btn-danger btn-sm mt-2" onclick="deleteFile(this)">Remover</button>
                    `;
                    fileList.appendChild(fileItem);
                };

                reader.readAsDataURL(file);
            }

            // Fecha o modal após salvar o arquivo
            const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
            modal.hide();
            document.getElementById('uploadForm').reset(); // Limpa o formulário após salvar
        }

        // Função para deletar um arquivo
        window.deleteFile = function(button) {
            const fileItem = button.parentElement;
            fileItem.remove();
        }

        // Função para filtrar arquivos por nível
        window.filterFiles = function(level) {
            const fileItems = document.querySelectorAll('.file-item');
            fileItems.forEach(item => {
                if (level === 'all' || item.getAttribute('data-level') == level) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    });
  </script>
</body>

</html>
