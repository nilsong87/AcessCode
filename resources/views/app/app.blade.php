<x-layout>
  <div class="pagina1">
    <div class="grid">
      <h3>Escolha um Comando</h3>
      <div class="left-panel"></div>
      <div class="menu" style="height: 80%;">
        <div class="preview-screen"></div>
        <div class="code-screen">
          <p id="codigo-gerado"></p>
        </div>
        <div class="drop-zone">Solte aqui<br><br></div>
      </div>
      <button class="execute-button">Executar</button>
      <div class="container">
        <canvas id="gameCanvas" width="672" height="672"></canvas>
      </div>
    </div>
  </div>

  <script>
    // resources/js/game.js

    const canvas = document.getElementById('gameCanvas');
    const ctx = canvas.getContext('2d');
    let collisionOccurred = false;

    // **** Alterações para usar os atributos data-* (Removido para simplificar) ****
    // Agora as URLs das imagens são passadas diretamente no final do código

    const blockGifs = {
      "Ande/move": "{{ asset('image/ANDAR-MOVE.gif') }}",
      "Down": "{{ asset('image/ANDAR-MOVE.gif') }}",
      "Left": "{{ asset('image/VIRE-PARA-ESQUERDA.gif') }}",
      "Se/Direita": "{{ asset('image/VIRE-PARA-DIREITA.gif') }}",
      "Se/Esquer": "{{ asset('image/VIRE-PARA-ESQUERDA.gif') }}",
      "Executar": "{{ asset('image/começar.gif') }}"
    };

    function showGif(block) {
      const gifUrl = blockGifs[block];
      const previewScreen = document.querySelector('.preview-screen');
      const gifElement = document.createElement('img');
      gifElement.src = gifUrl;
      gifElement.classList.add('block-gif');
      previewScreen.innerHTML = ''; // Limpa qualquer GIF anterior
      previewScreen.appendChild(gifElement);
    }

    function hideGif() {
      const previewScreen = document.querySelector('.preview-screen');
      previewScreen.innerHTML = ''; // Remove o GIF
    }

    const blockLimits = {
      "Ande/move": 11,
      "Down": 2,
      "Left": 2,
      "Se/Direita": 2,
      "Se/Esquer": 2
    };

    const availableBlocks = ["Ande/move", "Se/Direita", "Se/Esquer"];

    const blockUsage = {
      "Ande/move": 0,
      "Down": 0,
      "Left": 0,
      "Se/Direita": 0,
      "Se/Esquer": 0
    };

    function createAvailableBlocks() {
      const leftPanel = document.querySelector('.left-panel');

      if (!leftPanel) {
        console.error('Elemento .left-panel não encontrado.');
        return;
      }

      leftPanel.innerHTML = ''; // Limpa os blocos existentes

      availableBlocks.forEach(block => {
        const blockItem = document.createElement('div');
        blockItem.classList.add('item');
        blockItem.textContent = block;
        blockItem.setAttribute('draggable', 'true');
        blockItem.addEventListener('dragstart', (e) => {
          e.dataTransfer.setData('text/plain', blockItem.textContent);
          e.dataTransfer.setData('text/id', blockItem.id);
        });

        blockItem.addEventListener('mouseover', () => showGif(block));
        blockItem.addEventListener('mouseout', () => hideGif());

        leftPanel.appendChild(blockItem);
      });

      console.log('Blocos adicionados:', leftPanel.innerHTML);
    }

    document.addEventListener('DOMContentLoaded', (event) => {
      createAvailableBlocks();
    });

    const maze = [
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1],
      [1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1]
    ];

    const cellSize = 54;
    const player = {
      x: 0,
      y: 7,
      image: new Image()
    };
    const goal = {
      x: 11,
      y: 7,
      image: new Image()
    };
    const fplane = {
      x: 12,
      y: 12,
      image: new Image()
    };

    // Carrega as imagens diretamente no código (substituindo os atributos data-*)
    fplane.image.src = "{{ asset('image/fplane.png') }}";
    player.image.src = "{{ asset('image/player.png') }}";
    goal.image.src = "{{ asset('image/goal.png') }}";

    player.image.onload = function() {
      draw(); // Garante que o jogo desenhe após carregar a imagem do jogador
    };

    function drawMaze() {
      for (let y = 0; y < maze.length; y++) {
        for (let x = 0; x < maze[y].length; x++) {
          if (maze[y][x] === 1) {
            ctx.fillStyle = 'black';
            ctx.fillRect(x * cellSize, y * cellSize, cellSize, cellSize);
          }
        }
      }
    }

    function drawFplane() {
      ctx.drawImage(fplane.image, 0, 0, canvas.width, canvas.height);
    }

    function drawPlayer() {
      ctx.drawImage(player.image, player.x * cellSize, player.y * cellSize, cellSize, cellSize);
    }

    function drawGoal() {
      ctx.drawImage(goal.image, goal.x * cellSize, goal.y * cellSize, cellSize, cellSize);
    }

    function draw() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      drawMaze();
      drawFplane();
      drawGoal();
      drawPlayer();
    }

    createAvailableBlocks();

    const dropZone = document.querySelector('.drop-zone');
    let i = 2;

    dropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
    });

    dropZone.addEventListener('drop', (e) => {
      e.preventDefault();

      const itemText = e.dataTransfer.getData('text/plain');

      if (blockUsage[itemText] < blockLimits[itemText]) {
        blockUsage[itemText] += 1;
        i++;

        const newItem = document.createElement('div');
        newItem.classList.add('item');
        newItem.id = 'item' + i;
        newItem.dataset.item_id = i;
        newItem.textContent = itemText;

        dropZone.appendChild(newItem);

        newItem.setAttribute('draggable', 'true');
        newItem.addEventListener('dragstart', (e) => {
          e.dataTransfer.setData('text/plain', newItem.textContent);
          e.dataTransfer.setData('text/id', newItem.id);
        });

        // Em vez de mover o jogador imediatamente, apenas acumule a ação
        actions.push(newItem.textContent);
        draw();
      } else {
        alert(`Limite de blocos "${itemText}" atingido.`);
      }
    });

    dropZone.addEventListener('dragend', (e) => {
      const itemText = e.target.textContent;
      actions.push(`revert ${itemText}`);
      draw();
      dropZone.removeChild(e.target);

      if (blockUsage[itemText] > 0) {
        blockUsage[itemText] -= 1;
      }
    });

    function movePlayer(direction) {
      const steps = direction.includes('x2') ? 1 : 2;
      const baseDirection = direction.replace(' x2', '');

      lastDirection = baseDirection;

      for (let step = 0; step < steps; step++) {
        let newX = player.x;
        let newY = player.y;

        switch (baseDirection) {
          case "Ande/move":
            newX += 1;
            break;
          case "Down":
            newY += 2;
            break;
          case "Left":
            newX -= 2;
            break;
          case "Se/Direita":
            newY -= 2;
            checkCollision(newX, newY);
            draw();
            setTimeout(() => {
              newX += 2;
              checkCollision(newX, newY);
              draw();
            }, 1000);
            return;
          case "Se/Esquer":
            newY += 2;
            checkCollision(newX, newY);
            draw();
            setTimeout(() => {
              newX -= 2;
              checkCollision(newX, newY);
              draw();
            }, 1000);
            return;
          default:
            console.warn("Comando desconhecido: ", baseDirection);
        }
        checkCollision(newX, newY);
      }

      // Adicionar o código ao code-screen
      const codigoGerado = document.getElementById('codigo-gerado');
      switch (baseDirection) {
        case "Ande/move":
          codigoGerado.textContent += "player.x += 1;\n";
          break;
        case "Down":
          codigoGerado.textContent += "player.y += 2;\n";
          break;
        case "Left":
          codigoGerado.textContent += "player.x -= 2;\n";
          break;
        case "Se/Direita":
          codigoGerado.textContent += "player.y -= 2;\n";
          setTimeout(() => {
            codigoGerado.textContent += "player.x += 2;\n";
          }, 1000);
          break;
        case "Se/Esquer":
          codigoGerado.textContent += "player.y += 2;\n";
          setTimeout(() => {
            codigoGerado.textContent += "player.x -= 2;\n";
          }, 1000);
          break;
      }
    }

    function revertPlayer(direction) {
      const steps = direction.includes('x2') ? 1 : 2;
      const baseDirection = direction.replace(' x2', '');

      for (let step = 0; step < steps; step++) {
        let newX = player.x;
        let newY = player.y;

        switch (baseDirection) {
          case "Ande/move":
            newX -= 1;
            break;
          case "Down":
            newY -= 2;
            break;
          case "Left":
            newX += 2;
            break;
          case "Se/Direita":
            newY -= 2;
            checkCollision(newX, newY);
            draw();
            setTimeout(() => {
              newX += 2;
              checkCollision(newX, newY);
              draw();
            }, 1000);
            return;
          case "Se/Esquer":
            newX += 2;
            checkCollision(newX, newY);
            draw();
            setTimeout(() => {
              newY -= 2;
              checkCollision(newX, newY);
              draw();
            }, 1000);
            return;
          default:
            console.warn("Comando desconhecido: ", baseDirection);
        }
        checkCollision(newX, newY);
      }
      // Adicionar o código ao code-screen
      const codigoGerado = document.getElementById('codigo-gerado');
      switch (baseDirection) {
        case "Ande/move":
          codigoGerado.textContent += "player.x -= 1;\n";
          break;
        case "Down":
          codigoGerado.textContent += "player.y -= 2;\n";
          break;
        case "Left":
          codigoGerado.textContent += "player.x += 2;\n";
          break;
        case "Se/Direita":
          codigoGerado.textContent += "player.y -= 2;\n";
          setTimeout(() => {
            codigoGerado.textContent += "player.x += 2;\n";
          }, 1000);
          break;
        case "Se/Esquer":
          codigoGerado.textContent += "player.x += 2;\n";
          setTimeout(() => {
            codigoGerado.textContent += "player.y -= 2;\n";
          }, 1000);
          break;
      }
    }

    function checkCollision(newX, newY) {
    let collision = false;
    if (maze[newY][newX] === 1) {
        collision = true;
    } else if (newX === goal.x && newY === goal.y) {
        player.x = newX;
        player.y = newY;
        draw();
        setTimeout(() => {
            alert('Parabéns, você venceu!');
            window.location.href = '/app'; // Redireciona para a rota '/app2'
        }, 100);
        return;
    }

    player.x = newX;
    player.y = newY;
    draw();

    if (collision) {
        setTimeout(() => {
            const confirmReset = window.confirm('Colisão! Tente outra vez!');
            if (confirmReset) {
                resetPlayer();
            }
        }, 100);
    }
}
    function resetPlayer() {
      player.x = 0;
      player.y = 7;
      resetBlocks();
    }

    function resetBlocks() {
      dropZone.innerHTML = '';

      for (let block in blockUsage) {
        blockUsage[block] = 0;
      }

      createAvailableBlocks();
      draw();
      document.getElementById('codigo-gerado').textContent = "";
    }

    let actions = [];

    document.querySelector('.execute-button').addEventListener('click', () => {
      if (collisionOccurred) {
        resetPlayer();
        collisionOccurred = false;
      } else {
        let delay = 0;
        actions.forEach((action, index) => {
          setTimeout(() => {
            if (action.startsWith('revert ')) {
              revertPlayer(action.replace('revert ', ''));
            } else {
              movePlayer(action);
            }
            draw();
            if (index === actions.length - 1) {
              actions = [];
            }
          }, delay);
          delay += 600;
        });
      }
    });
  </script>
</x-layout>