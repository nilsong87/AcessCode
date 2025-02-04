// resources/js/script.js

/* Menu do Header */
// Função para alternar a visibilidade do menu de navegação
function toggleMenu() {
  const navLinks = document.querySelector('.nav-links');
  if (navLinks) {
    navLinks.classList.toggle('active');
  }
}

// Função para fechar o folder
function closeFolder() {
  const folder = document.getElementById('folder');
  if (folder) {
    folder.style.display = 'none';
  }
}

// Fechar o modal de login se clicar fora dele
window.onclick = function (event) {
  const modal = document.getElementById('loginModal');
  if (event.target === modal) {
    closeModal();
  }
}

/* Carrossel quem somos */
// Função para inicializar o carrossel quando o DOM estiver carregado
document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.querySelector('.carousel');
  const boxes = document.querySelectorAll('.carousel-box');
  const totalBoxes = boxes.length;
  const delay = 5000; // Tempo em milissegundos
  let currentIndex = 0;
  let autoSlideInterval;

  function updateCarousel() {
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  function nextSlide() {
      currentIndex = (currentIndex + 1) % totalBoxes;
      updateCarousel();
  }

  function prevSlide() {
      currentIndex = (currentIndex - 1 + totalBoxes) % totalBoxes;
      updateCarousel();
  }

  function startAutoSlide() {
      autoSlideInterval = setInterval(nextSlide, delay);
  }

  function stopAutoSlide() {
      clearInterval(autoSlideInterval);
  }

  document.getElementById('nextBtn').addEventListener('click', nextSlide);
  document.getElementById('prevBtn').addEventListener('click', prevSlide);

  boxes.forEach(box => {
      box.addEventListener('mouseenter', stopAutoSlide);
      box.addEventListener('mouseleave', startAutoSlide);
  });

  startAutoSlide();
});



/* App */
// Função para salvar o progresso do usuário no localStorage
function saveProgress() {
  const userData = {
    areaDeMontagem: document.querySelector('.area-de-montagem')?.textContent || '',
    video: document.querySelector('.video')?.textContent || '',
    info: document.querySelector('.info')?.textContent || ''
  };
  localStorage.setItem('userData', JSON.stringify(userData));
  alert('Progresso salvo com sucesso!');
}

// Função para carregar o progresso do usuário do localStorage
function loadProgress() {
  const userData = JSON.parse(localStorage.getItem('userData'));
  if (userData) {
    if (document.querySelector('.area-de-montagem')) {
      document.querySelector('.area-de-montagem').textContent = userData.areaDeMontagem;
    }
    if (document.querySelector('.video')) {
      document.querySelector('.video').textContent = userData.video;
    }
    if (document.querySelector('.info')) {
      document.querySelector('.info').textContent = userData.info;
    }
    alert('Progresso carregado com sucesso!');
  } else {
    alert('Nenhum progresso salvo encontrado.');
  }
}



/* Manuntenção */
// Função para salvar o arquivo 
function saveFile() { 
  const fileInput = document.getElementById('fileInput'); 
  const fileDescription = document.getElementById('fileDescription').value; 
  const levelSelect = document.getElementById('levelSelect').value; 

  if (fileInput.files.length === 0) { 
    alert('Por favor, escolha um arquivo.');
    return;
  }

  const file = fileInput.files[0];
  const allowedExtensions = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
  if (!allowedExtensions.includes(file.type)) {
    alert('Erro: Por favor, selecione um arquivo de imagem nos formatos JPEG, PNG ou GIF.');
    return;
  }

  const formData = new FormData();
  formData.append('file', file);
  formData.append('description', fileDescription);
  formData.append('level', levelSelect);

  fetch('/upload', {
    method: 'POST',
    headers: {
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
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

  // Fecha o modal após salvar o arquivo 
  var myModalEl = document.getElementById('exampleModal'); 
  var modal = bootstrap.Modal.getInstance(myModalEl); 
  modal.hide(); 

  document.getElementById('uploadForm').reset(); // Limpa o formulário após salvar
}

// Função para deletar um arquivo 
function deleteFile(button) { 
  const fileItem = button.parentElement; 
  fileItem.remove();
} 

// Função para filtrar arquivos por nível 
function filterFiles(level) { 
  const fileItems = document.querySelectorAll('.file-item'); 
  fileItems.forEach(item => { 
    if (level === 'all' || item.getAttribute('data-level') == level) { 
      item.style.display = 'block'; 
    } else { 
      item.style.display = 'none'; 
    } 
  }); 
} 

// Função para fechar o modal ao clicar fora dele 
window.onclick = function(event) { 
  const modal = document.getElementById('exampleModal'); 
  if (event.target == modal) { 
    var myModal = bootstrap.Modal.getInstance(modal); 
    myModal.hide(); 
  } 
}
let isLoggedIn = false;

// Função para verificar a autenticação do usuário
function checkAuth() {
  const authLink = document.getElementById('authLink');
  if (authLink) {
    if (isLoggedIn) {
      authLink.href = 'logout.html';
      authLink.innerHTML = 'Logout<i class="bi bi-box-arrow-right"></i>';
    } else {
      authLink.href = '#';
      authLink.setAttribute('data-toggle', 'modal');
      authLink.setAttribute('data-target', '#loginModal');
      authLink.innerHTML = 'Login<i class="bi bi-box-arrow-in-right"></i>';
    }
  } else {
    console.error('Elemento authLink não encontrado.');
  }
}

// Função para realizar o login do usuário
function login() {
  isLoggedIn = true;
  alert('Login realizado com sucesso!');
  $('#loginModal').modal('hide');
  checkAuth();
}

// Verificar a autenticação do usuário ao carregar a página
window.onload = checkAuth;

document.addEventListener('DOMContentLoaded', function () {
  // Função para abrir o modal
  window.openModal = function () {
    document.getElementById('exampleModal').style.display = 'block';
  }

  // Função para fechar o modal
  window.closeModal = function () {
    document.getElementById('exampleModal').style.display = 'none';
  }

});
