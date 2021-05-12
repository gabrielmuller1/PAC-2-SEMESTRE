const fila = document.querySelector('.container-carousel');
const filmes = document.querySelector('.filme');

const setaEsquerda = document.getElementById('seta-esquerda');
const setaDireita= document.getElementById('seta-direita');

// -------- ------- Event Listener para seta direita. ------
setaDireita.addEventListener('click', () => {
    fila.scrollLeft += fila.offsetWidth;

    const indicadorAtivo = document.querySelector('.indicadores .ativo');
    if(indicadorAtivo.nextSibling){
        indicadorAtivo.nextSibling.classList.add('ativo');
        indicadorAtivo.classList.remove('ativo');
    }
});

// -------- ------- Event Listener para seta esquerda. ------
setaEsquerda.addEventListener('click', () => {
    fila.scrollLeft -= fila.offsetWidth;

    const indicadorAtivo = document.querySelector('.indicadores .ativo');
    if(indicadorAtivo.previousSibling){
        indicadorAtivo.previousSibling.classList.add('ativo');
        indicadorAtivo.classList.remove('ativo');
    }
});

// ---------- ------- Paginação --- -----
const numeroPaginas = Math.ceil(filmes.length / 5);
for(let i = 0; i < numeroPaginas; i++){
    const indicador = document.createElement('button');

    if(i == 0){
        indicador.classList.add('ativo');
    }

    document.querySelector('.indicadores').appendChild(indicador);
    indicador.addEventListener('click', (e) => {
        fila.scrollLeft = i * fila.offsetWidth;

        document.querySelector('.indicadores .activo').classList.remove('ativo');
        e.target.classList.add('activo');
    });
}

// --------- ----- Hover -------- --
filmes.forEach((filme) => {
    filme.addEventListener('mouseenter', (e) => {
        const elemento = e.currentTarget;
        setTimeout(() => {
            filmes.forEach(filme => filme.classList.remove('hover'));
            elemento.classList.add('hover');
        }, 300);
    });
});