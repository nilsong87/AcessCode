/* Menu do Header */
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links'); // Seleciona o elemento com a classe 'nav-links'
    navLinks.classList.toggle('active'); // Alterna a classe 'active' no elemento selecionado
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Menu do Login e Cadastro */
function openModal() {
    document.getElementById('loginModal').style.display = 'block'; // Exibe o modal de login
}

function closeModal() {
    document.getElementById('loginModal').style.display = 'none'; // Esconde o modal de login
}

function toggleForm() {
    const loginContainer = document.getElementById('login-container'); // Seleciona o container de login
    const registerContainer = document.getElementById('register-container'); // Seleciona o container de cadastro
    if (loginContainer.style.display === 'none') { // Verifica se o container de login está escondido
        loginContainer.style.display = 'block'; // Exibe o container de login
        registerContainer.style.display = 'none'; // Esconde o container de cadastro
    } else {
        loginContainer.style.display = 'none'; // Esconde o container de login
        registerContainer.style.display = 'block'; // Exibe o container de cadastro
    }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Folder */
function closeFolder() {
    document.getElementById('folder').style.display = 'none'; // Esconde o folder
}

window.onclick = function (event) {
    const modal = document.getElementById('loginModal'); // Seleciona o modal de login
    if (event.target === modal) { // Verifica se o clique foi fora do modal
        closeModal(); // Fecha o modal
    }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Carrossel quem somos */
// Aguarda o carregamento completo do DOM antes de executar o código
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona os botões de navegação do carrossel
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    // Seleciona o contêiner do carrossel e todas as caixas do carrossel
    const carousel = document.querySelector('.carousel');
    const carouselBoxes = document.querySelectorAll('.carousel-box');
    
    // Obtém o número total de caixas no carrossel
    const totalBoxes = carouselBoxes.length;
    
    // Inicializa o índice atual do carrossel
    let currentIndex = 0;

    // Função para atualizar o estado dos botões de navegação
    function updateButtons() {
        // Desabilita o botão "anterior" se estiver na primeira caixa
        prevBtn.classList.toggle('disabled', currentIndex === 0);
        
        // Desabilita o botão "próximo" se estiver na última caixa
        nextBtn.classList.toggle('disabled', currentIndex === totalBoxes - 1);
    }

    // Função para atualizar a posição do carrossel
    function updateCarousel() {
        // Obtém a largura de uma caixa do carrossel
        const boxWidth = carouselBoxes[0].offsetWidth;
        
        // Aplica a transformação para mover o carrossel
        carousel.style.transform = `translateX(-${currentIndex * boxWidth}px)`;
    }

    // Adiciona um evento de clique ao botão "anterior"
    prevBtn.addEventListener('click', function() {
        // Verifica se não está na primeira caixa
        if (currentIndex > 0) {
            // Decrementa o índice atual
            currentIndex--;
            
            // Atualiza a posição do carrossel e o estado dos botões
            updateCarousel();
            updateButtons();
        }
    });

    // Adiciona um evento de clique ao botão "próximo"
    nextBtn.addEventListener('click', function() {
        // Verifica se não está na última caixa
        if (currentIndex < totalBoxes - 1) {
            // Incrementa o índice atual
            currentIndex++;
            
            // Atualiza a posição do carrossel e o estado dos botões
            updateCarousel();
            updateButtons();
        }
    });

    // Inicializa os botões no estado correto
    updateButtons();
});
/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Menu do FAQ */
function toggleFAQ(id) {
    const content = document.getElementById(id); // Seleciona o conteúdo do FAQ pelo ID
    if (content.style.display === "block") { // Verifica se o conteúdo está visível
        content.style.display = "none"; // Esconde o conteúdo
    } else {
        content.style.display = "block"; // Exibe o conteúdo
    }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* App */

function saveProgress() {
    const userData = {
        areaDeMontagem: document.querySelector('.area-de-montagem').textContent, // Obtém o conteúdo da área de montagem
        video: document.querySelector('.video').textContent, // Obtém o conteúdo do vídeo
        info: document.querySelector('.info').textContent // Obtém o conteúdo da informação
    };
    localStorage.setItem('userData', JSON.stringify(userData)); // Salva os dados no localStorage
    alert('Progresso salvo com sucesso!'); // Exibe uma mensagem de sucesso
}

function loadProgress() {
    const userData = JSON.parse(localStorage.getItem('userData')); // Carrega os dados do localStorage
    if (userData) {
        document.querySelector('.area-de-montagem').textContent = userData.areaDeMontagem; // Define o conteúdo da área de montagem
        document.querySelector('.video').textContent = userData.video; // Define o conteúdo do vídeo
        document.querySelector('.info').textContent = userData.info; // Define o conteúdo da informação
        alert('Progresso carregado com sucesso!'); // Exibe uma mensagem de sucesso
    } else {
        alert('Nenhum progresso salvo encontrado.'); // Exibe uma mensagem de erro
    }
}

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
 /* Manuntenção */ 
 
// Função para salvar o arquivo
function saveFile() {
    const fileInput = document.getElementById('fileInput'); // Obtém o elemento de input do arquivo
    const fileDescription = document.getElementById('fileDescription').value; // Obtém a descrição do arquivo
    const levelSelect = document.getElementById('levelSelect').value; // Obtém o nível selecionado
    const fileList = document.getElementById('fileList'); // Obtém o elemento da lista de arquivos
  
    if (fileInput.files.length > 0) { // Verifica se há arquivos selecionados
      const file = fileInput.files[0]; // Obtém o primeiro arquivo selecionado
      const reader = new FileReader(); // Cria um novo FileReader
      
      reader.onload = function(e) { // Define a função a ser executada quando o arquivo for carregado
        const fileContent = e.target.result; // Obtém o conteúdo do arquivo
        const fileItem = document.createElement('div'); // Cria um novo elemento div para o item do arquivo
        fileItem.classList.add('file-item'); // Adiciona a classe 'file-item' ao elemento
        fileItem.setAttribute('data-level', levelSelect); // Define o atributo 'data-level' com o nível selecionado
        fileItem.innerHTML = `
          <h5>Arquivo: ${file.name}</h5>
          <p>Descrição: ${fileDescription}</p>
          <p>Nível: ${levelSelect}</p>
          <p>Data: ${new Date().toLocaleDateString()}</p>
          ${file.type.startsWith('image/') ? `<img src="${fileContent}" alt="${file.name}" class="file-image">` : `<p class="error-message"><i class="bi bi-exclamation-triangle-fill"></i> ERROR</p>`}
          <button class="delete-button" onclick="deleteFile(this)">×</button>
        `;
        if (!file.type.startsWith('image/')) { // Verifica se o arquivo não é uma imagem
          fileItem.classList.add('error-card'); // Adiciona a classe 'error-card' ao elemento
        }
        fileList.appendChild(fileItem); // Adiciona o item do arquivo à lista de arquivos
      };
      
      reader.readAsDataURL(file); // Lê o conteúdo do arquivo como uma URL de dados
    }
    
    $('#exampleModal').modal('hide'); // Fecha o modal após salvar o arquivo
  }
  
  // Função para deletar um arquivo
  function deleteFile(button) {
    const fileItem = button.parentElement; // Obtém o elemento pai do botão (o item do arquivo)
    fileItem.remove(); // Remove o item do arquivo
  }
  
  // Função para filtrar arquivos por nível
  function filterFiles(level) {
    const fileItems = document.querySelectorAll('.file-item'); // Seleciona todos os itens de arquivo
    fileItems.forEach(item => {
      if (level === 'all' || item.getAttribute('data-level') == level) { // Verifica se o nível corresponde ao filtro
        item.style.display = 'block'; // Exibe o item do arquivo
      } else {
        item.style.display = 'none'; // Oculta o item do arquivo
      }
    });
  }
  
  // Variável para armazenar o estado de autenticação
// Variável para armazenar o estado de autenticação
let isLoggedIn = false;

// Função para verificar o estado de autenticação e atualizar o link de login/logout
function checkAuth() {
  const authLink = document.getElementById('authLink'); // Obtém o elemento do link de autenticação
  if (isLoggedIn) {
    // Se o usuário estiver logado, configura o link para logout
    authLink.href = '#';
    authLink.innerHTML = 'Logout<i class="bi bi-box-arrow-right"></i>';
    authLink.onclick = logout; // Define a função de logout para o clique
  } else {
    // Se o usuário não estiver logado, configura o link para abrir o modal de login
    authLink.href = '#';
    authLink.setAttribute('data-bs-toggle', 'modal');
    authLink.setAttribute('data-bs-target', '#loginModal');
    authLink.innerHTML = 'Login<i class="bi bi-box-arrow-in-right"></i>';
    authLink.onclick = null; // Remove qualquer função de clique anterior
  }
}

// Função para realizar o login
function login() {
  const username = document.getElementById('username').value; // Obtém o valor do campo de usuário
  const password = document.getElementById('password').value; // Obtém o valor do campo de senha

  // Verifica se as credenciais são válidas
  if (username === 'admin' && password === 'admin') {
    isLoggedIn = true; // Atualiza o estado de autenticação
    alert('Login realizado com sucesso!');
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal')); // Obtém o modal de login
    loginModal.hide(); // Fecha o modal de login
    checkAuth(); // Atualiza o link de autenticação
    window.location.href = 'manutencao.html'; // Redireciona para a próxima página
  } else {
    alert('Credenciais inválidas!'); // Exibe uma mensagem de erro se as credenciais forem inválidas
  }
}

// Função para realizar o logout
function logout() {
  isLoggedIn = false; // Atualiza o estado de autenticação
  alert('Logout realizado com sucesso!');
  checkAuth(); // Atualiza o link de autenticação
}

// Chama a função checkAuth ao carregar a página para configurar o link de autenticação corretamente
window.onload = checkAuth;
