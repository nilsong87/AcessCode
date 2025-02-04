/* Menu do FAQ */
  
     // Função para alternar a visibilidade do menu de navegação
     function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      if (navLinks) {
        navLinks.classList.toggle('active');
      }
    }

    // Função para alternar a visibilidade do conteúdo do FAQ
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
  
   
  
  