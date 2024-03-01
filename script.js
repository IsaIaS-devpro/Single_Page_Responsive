const botaoPrincipal = document.querySelector("#botao-principal");
const botaoEnviar = document.querySelector("#send-form");
const botaoDetalhes = document.querySelector("#botao1");
const botaoDetalhes2 = document.querySelector("#botao2");
const botaoDetalhes3 = document.querySelector("#botao3");
const botaoDetalhes4 = document.querySelector("#botao4");

botaoPrincipal.onclick = botao1;
botaoEnviar.onclick = mensagem;
botaoDetalhes.onclick = Detalhes;
botaoDetalhes2.onclick = Detalhes;
botaoDetalhes3.onclick = Detalhes;
botaoDetalhes4.onclick = Detalhes;

function botao1() {
    alert("BOTAO SELECIONADO.");
}

function mensagem() {
    alert("TESTE DE SELETOR DE BOTÃO: JS");
}


function Detalhes() {
    alert("BOTÃO SELECIONADO COM QUERYSELECTOR NO JS.");
}