var botaoAlternativa = document.querySelectorAll(".alternativa");
/*
var labels = document.querySelectorAll("#label--alternativa");

for(var i = 0; i < botaoAlternativa.length; i++) {
    botao = botaoAlternativa[i];
    label = labels[i];

    label.addEventListener("click", (evento) => {
        evento.stopPropagation();
        botao.classList.toggle('alternativa_ativa');
        console.log(label);
    })
}*/
botaoAlternativa.forEach(botao => {
    botao.addEventListener("click", (evento) => {
        botao.classList.toggle('alternativa_ativa');
        console.log(botao)
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