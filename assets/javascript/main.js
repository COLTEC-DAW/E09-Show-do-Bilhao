var botaoAlternativa = document.querySelectorAll(".alternativa");

botaoAlternativa.forEach(botao => {
    botao.addEventListener("click", (evento) => {
        botao.classList.toggle('alternativa_ativa');
        let input = botao.querySelector(".input--alternativa");
        input.checked = true;
        ativaSoUmBotao(botao);
    }, true)
});

function ativaSoUmBotao(botaoCerto) {
    botaoAlternativa.forEach(botao => {
        // Se não for o botao certo e estiver marcado, desmarca
        if(botao != botaoCerto && botao.classList.contains('alternativa_ativa')) {
            botao.classList.toggle('alternativa_ativa');
        }
    });
}