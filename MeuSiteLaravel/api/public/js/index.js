// Seleciona o elemento HTML ao qual você deseja adicionar/remover a classe
const navDark = document.getElementById('menu');

// Função para verificar a posição e adicionar/remover a classe
function verificarPosicao() {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    console.log(scrollTop);
    console.log(navDark);

    if (scrollTop > 0) {
        // Adiciona a classe quando a página é rolada para baixo
        navDark.classList.add('bg-dark');
    } else {
        // Remove a classe quando a página volta para o topo
        navDark.classList.remove('bg-dark');
    }
}

// Adiciona o evento de scroll para a função verificarPosicao
window.addEventListener('scroll', verificarPosicao);

// Chama a função uma vez para definir o estado inicial
verificarPosicao();
