function fraseBoba(){

    var texto = document.getElementById("descricao_comica");    

    var escolhido = Math.floor(Math.random() * 10);

    switch(escolhido) {
        case 0:
            texto.innerHTML = "O único jogo de respostas da internet! É sério, eu chequei";
            break;
        case 1:
            texto.innerHTML = "Não temos nenhuma afiliação com o Show do Milhão! Não nos processe por favor!";
            break;
        case 2:
            texto.innerHTML = "O melhor jogo de navegador já feito na minha casa! Talvez até no meu bairro";
            break;
        case 3:
            texto.innerHTML = "Sem fins lucrativos! Também sem meios lucrativos! Ou inícios lucrativos...";
            break;
        case 4:
            texto.innerHTML = "Número de jogadores online agora: entre 0 e infinito";
            break;
        case 5:
            texto.innerHTML = "Feito por programadores, para programadores, de programadores";
            break;
        case 6:
            texto.innerHTML = "O jogo com as perguntas mais díficeis que você já viu! Principalmente se nunca tiver visto nenhuma outra";
            break;
        case 7:
            texto.innerHTML = "O único jogo com 10 frases aleatórias programadas do pior jeito possível!";
            break;
        case 8:
            texto.innerHTML = "O melhor jogo já feito na história, de acordo com meu eu interior";
            break;
        case 9:
            texto.innerHTML = "O pior jogo para quem não gosta de diversão, pois ele é muito divertido, joguem joguem!";
            break;
    }

}

function mudaCorClick(){

    var opcoes = [];
    var sections = [];
    var botao = document.getElementById("botao");

    botao.disabled = false;
    
    for(let comp = 1; comp <= 4; comp++){

        auxName = "opcao_" + comp;
        nameSec = "sec_" + comp;

        opcoes[comp - 1] = document.getElementById(auxName);
        sections[comp - 1] = document.getElementById(nameSec);

        if(opcoes[comp - 1].checked){

            sections[comp - 1].style.backgroundColor = "#B5A331";
            sections[comp - 1].style.borderColor = "#B5A331";

        }
        else {
            
            sections[comp - 1].removeAttribute("style");
        
        }

    }

}

