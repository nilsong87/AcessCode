// Função para salvar o progresso do usuário no localStorage
function saveProgress() {
    const userData = {
        areaDeMontagem: document.querySelector('.area-de-montagem').innerHTML,
        video: document.querySelector('.video').innerHTML,
        info: document.querySelector('.info').innerHTML
    };
    localStorage.setItem('userData', JSON.stringify(userData)); // Armazena os dados como uma string JSON
    alert('Progresso salvo com sucesso!');
}

// Função para carregar o progresso do usuário do localStorage
function loadProgress() {
    const userData = JSON.parse(localStorage.getItem('userData')); // Converte a string JSON de volta para um objeto
    if (userData) {
        document.querySelector('.area-de-montagem').innerHTML = userData.areaDeMontagem;
        document.querySelector('.video').innerHTML = userData.video;
        document.querySelector('.info').innerHTML = userData.info;
        alert('Progresso carregado com sucesso!');
        reassignDragEvents(); // Reatribui os eventos de arrastar
    } else {
        alert('Nenhum progresso salvo encontrado.');
    }
}

