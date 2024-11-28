/* Menu do Header */
function toggleMenu() {
  const navLinks = document.querySelector('.nav-links');
  if (navLinks) {
    navLinks.classList.toggle('active');
  }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Menu do Login e Cadastro */
function openModal() {
  const loginModal = document.getElementById('loginModal');
  if (loginModal) {
    loginModal.style.display = 'block';
  }
}

function closeModal() {
  const loginModal = document.getElementById('loginModal');
  if (loginModal) {
    loginModal.style.display = 'none';
  }
}

function toggleForm() {
  const loginContainer = document.getElementById('login-container');
  const registerContainer = document.getElementById('register-container');
  if (loginContainer && registerContainer) {
    if (loginContainer.style.display === 'none') {
      loginContainer.style.display = 'block';
      registerContainer.style.display = 'none';
    } else {
      loginContainer.style.display = 'none';
      registerContainer.style.display = 'block';
    }
  }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Folder */
function closeFolder() {
  const folder = document.getElementById('folder');
  if (folder) {
    folder.style.display = 'none';
  }
}

window.onclick = function (event) {
  const modal = document.getElementById('loginModal');
  if (event.target === modal) {
    closeModal();
  }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Carrossel quem somos */
document.addEventListener('DOMContentLoaded', function() {
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const carousel = document.querySelector('.carousel');
  const carouselBoxes = document.querySelectorAll('.carousel-box');
  const totalBoxes = carouselBoxes.length;
  let currentIndex = 0;

  function updateButtons() {
    if (prevBtn) {
      prevBtn.classList.toggle('disabled', currentIndex === 0);
    }
    if (nextBtn) {
      nextBtn.classList.toggle('disabled', currentIndex === totalBoxes - 1);
    }
  }

  function updateCarousel() {
    if (carousel && carouselBoxes.length > 0) {
      const boxWidth = carouselBoxes[0].offsetWidth;
      carousel.style.transform = `translateX(-${currentIndex * boxWidth}px)`;
    }
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function() {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
        updateButtons();
      }
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', function() {
      if (currentIndex < totalBoxes - 1) {
        currentIndex++;
        updateCarousel();
        updateButtons();
      }
    });
  }

  updateButtons();
});

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* Menu do FAQ */
function toggleFAQ(id) {
  const content = document.getElementById(id);
  if (content) {
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  }
}

/*----------------------------------------------------------------------------------------------------------------------------------------------*/

/* App */
function saveProgress() {
  const userData = {
    areaDeMontagem: document.querySelector('.area-de-montagem')?.textContent || '',
    video: document.querySelector('.video')?.textContent || '',
    info: document.querySelector('.info')?.textContent || ''
  };
  localStorage.setItem('userData', JSON.stringify(userData));
  alert('Progresso salvo com sucesso!');
}

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
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
/* Manuntenção */ 

// Função para salvar o arquivo
function saveFile() {
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
          fileItem.classList.add('file-item');
          fileItem.setAttribute('data-level', levelSelect);
          fileItem.innerHTML = `
              <h5>Arquivo: ${file.name}</h5>
              <p>Descrição: ${fileDescription}</p>
              <p>Nível: ${levelSelect}</p>
              <p>Data: ${new Date().toLocaleDateString()}</p>
              ${file.type.startsWith('image/') ? `<img src="${fileContent}" alt="${file.name}" class="file-image">` : `<p class="error-message"><i class="bi bi-exclamation-triangle-fill"></i> ERROR</p>`}
              <button class="delete-button" onclick="deleteFile(this)">×</button>
          `;

          if (!file.type.startsWith('image/')) {
              fileItem.classList.add('error-card');
          }

          fileList.appendChild(fileItem);
      };

      reader.readAsDataURL(file);
  }

  $('#exampleModal').modal('hide');
}

function deleteFile(button) {
  const fileItem = button.parentElement;
  fileItem.remove();
}

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

let isLoggedIn = false;

function checkAuth() {
  const authLink = document.getElementById('authLink');
  if (isLoggedIn) {
      authLink.href = 'logout.html';
      authLink.innerHTML = 'Logout<i class="bi bi-box-arrow-right"></i>';
  } else {
      authLink.href = '#';
      authLink.setAttribute('data-toggle', 'modal');
      authLink.setAttribute('data-target', '#loginModal');
      authLink.innerHTML = 'Login<i class="bi bi-box-arrow-in-right"></i>';
  }
}

function login() {
  isLoggedIn = true;
  alert('Login realizado com sucesso!');
  $('#loginModal').modal('hide');
  checkAuth();
}

window.onload = checkAuth;