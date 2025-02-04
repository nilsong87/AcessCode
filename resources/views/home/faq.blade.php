<x-layout>

  <section class="corpo-faq faq-background">
    <div class="faq-container">
      <h1 class="titulo-faq">FAQ</h1>
      <button class="faq-button" onclick="toggleFAQ('faq1')">O que é o AcessCode?</button>
      <div id="faq1" class="faq-content">
        <p class="texto-faq">É um sistema de introdução à aprendizagem de programação através da gamificação. A
          partir dos jogos, o processo de aprendizado da lógica de programação e os conceitos da programação
          se tornam mais agradáveis e eficazes, fomentando o interesse e facilitando o acesso de pessoas com
          deficiência auditiva e surdas no mundo da tecnologia da informação (TI).</p>
      </div>

      <button class="faq-button" onclick="toggleFAQ('faq2')">Como funciona o AcessCode?</button>
      <div id="faq2" class="faq-content">
        <p class="texto-faq">O AcessCode traz pequenos problemas a serem solucionados através da junção das
          peças disponibilizadas. As peças representam termos da programação e apresentam sua respectiva
          tradução em libras. Após a solução do problema proposto, apresentamos o código.</p>
      </div>

      <button class="faq-button" onclick="toggleFAQ('faq3')">Qual a linguagem utilizada no AcessCode?</button>
      <div id="faq3" class="faq-content">
        <p class="texto-faq">JavaScript</p>
      </div>

      <button class="faq-button" onclick="toggleFAQ('faq4')">Como surgiu o AcessCode?</button>
      <div id="faq4" class="faq-content">
        <p class="texto-faq">O AcessCode é um trabalho de conclusão do curso Programador FullStack do Senac-BA.
          O tema escolhido pela turma teve como principal característica a preocupação com a acessibilidade de
          pessoas com deficiência auditiva e surdas no mundo da tecnologia. Como a maior parte das plataformas
          e programas voltados à aprendizagem de programação não são voltados para essa parcela da sociedade,
          os portadores de deficiência auditiva e surdos encontram maior dificuldade no aprendizado de
          programação. Logo, através dessa ideia, buscamos tornar esse processo de aprendizagem mais fácil,
          por meio de uma plataforma voltada para esse público.</p>
      </div>
    </div>
  </section>

  
  <script>
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
  </script>
  
</x-layout>