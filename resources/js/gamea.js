function saveProgress() {
    const userData = {
        areaDeMontagem: document.querySelector('.area-de-montagem').innerHTML,
        video: document.querySelector('.video').innerHTML,
        info: document.querySelector('.info').innerHTML
    };
    localStorage.setItem('userData', JSON.stringify(userData));
    alert('Progresso salvo com sucesso!');
}

function loadProgress() {
    const userData = JSON.parse(localStorage.getItem('userData'));
    if (userData) {
        document.querySelector('.area-de-montagem').innerHTML = userData.areaDeMontagem;
        document.querySelector('.video').innerHTML = userData.video;
        document.querySelector('.info').innerHTML = userData.info;
        alert('Progresso carregado com sucesso!');
        reassignDragEvents();
    } else {
        alert('Nenhum progresso salvo encontrado.');
    }
}

document.addEventListener('dragstart', function(event) {
    if (event.target.classList.contains('block')) {
        event.dataTransfer.setData('text', event.target.id);
    }
});

document.addEventListener('dragover', function(event) {
    event.preventDefault();
});

document.addEventListener('drop', function(event) {
    event.preventDefault();
    const data = event.dataTransfer.getData('text');
    const block = document.getElementById(data);
    if (event.target.classList.contains('dropzone')) {
        event.target.appendChild(block);
    }
});

function execute() {
    const dropzone = document.getElementById('dropzone');
    const blocks = dropzone.children;
    let expression = '';
    for (let block of blocks) {
        expression += block.textContent;
    }
    let result;
    try {
        result = eval(expression);
    } catch (e) {
        result = 'Erro na expressão';
    }
    document.getElementById('result').textContent = result;
}

function showCode() {
    const dropzone = document.getElementById('dropzone');
    const blocks = dropzone.children;
    let code = generateDetailedCode(blocks);
    document.getElementById('codeDisplay').textContent = code;
    document.getElementById('codeContainer').style.display = 'block';
}

function generateDetailedCode(blocks) {
    let code = 'let result;\n';
    let expression = '';
    let ifCondition = false;
    let ifCode = '';

    for (let block of blocks) {
        const text = block.textContent;
        if (text === 'if') {
            ifCondition = true;
            ifCode += 'if (';
        } else if (text === 'true' || text === 'false') {
            if (ifCondition) {
                ifCode += text;
            } else {
                expression += text;
            }
        } else if (['>', '<', '>=', '<=', '==', '===', '!=', '!=='].includes(text)) {
            if (ifCondition) {
                ifCode += ` ${text} `;
            } else {
                expression += ` ${text} `;
            }
        } else if (text === 'else') {
            ifCondition = false;
            ifCode += ') {\n    result = true;\n} else {\n    result = false;\n}\n';
            code += ifCode;
            ifCode = '';
        } else if (text === 'String') {
            expression += 'String(';
        } else if (text === 'Number') {
            expression += 'Number(';
        } else if (text === '||' || text === '&&') {
            expression += ` ${text} `;
        } else if (text === '=') {
            expression += ' = ';
        } else {
            if (ifCondition) {
                ifCode += text;
            } else {
                expression += text;
            }
        }
    }

    if (!ifCondition) {
        code += `try {\n    result = ${expression};\n} catch (e) {\n    result = 'Erro na expressão';\n}\n`;
    }

    code += 'console.log(result);';
    return code;
}

function resetGame() {
    const dropzone = document.getElementById('dropzone');
    dropzone.innerHTML = '';

    document.getElementById('result').textContent = '';

    document.getElementById('codeContainer').style.display = 'none';

    const blocksContainer = document.getElementById('blocks-container');
    blocksContainer.innerHTML = `
      <br>
      <div class="block" draggable="true" id="block1">5</div> 
      <div class="block" draggable="true" id="block2">10</div> 
      <br>
      <div class="block" draggable="true" id="block3">5</div> 
      <div class="block" draggable="true" id="block4">10</div> 
      <br>
      <div class="block" draggable="true" id="block5">+</div> 
      <div class="block" draggable="true" id="block6">-</div> 
      <br>
      <div class="block" draggable="true" id="block7">*</div> 
      <div class="block" draggable="true" id="block8">/</div> 
      <br>
      <div class="block" draggable="true" id="block9">"Hello, "</div> 
      <div class="block" draggable="true" id="block10">"World!"</div> 
      <br>
      <div class="block" draggable="true" id="block11">true</div> 
      <div class="block" draggable="true" id="block12">false</div> 
      <br>
      <div class="block" draggable="true" id="block13">if</div> 
      <div class="block" draggable="true" id="block14">></div> 
      <br>
      <div class="block" draggable="true" id="block15">||</div> 
      <div class="block" draggable="true" id="block16">&&</div> 
      <br>
      <div class="block" draggable="true" id="block17">==</div> 
      <div class="block" draggable="true" id="block18">===</div>
      <br>
      <div class="block" draggable="true" id="block19">!=</div>
      <div class="block" draggable="true" id="block20">!==</div> 
      <br>
      <div class="block" draggable="true" id="block21"><</div> 
      <div class="block" draggable="true" id="block22">true</div>
      <br>
      <div class="block" draggable="true" id="block23">false</div>
      <div class="block" draggable="true" id="block24"><=</div>
      <br>
      <div class="block" draggable="true" id="block25">>=</div>            
    `;

    reassignDragEvents();
}

function reassignDragEvents() {
    document.querySelectorAll('.block').forEach(block => {
        block.addEventListener('dragstart', function(event) {
            event.dataTransfer.setData('text', event.target.id);
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    reassignDragEvents();
});
