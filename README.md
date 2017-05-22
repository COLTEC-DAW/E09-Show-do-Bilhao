# PHP: O Show do Bilhão

Nesta série de exercícios iremos praticar o uso da linguagem PHP desenvolvendo uma aplicação web de perguntas e respostas denominado *Show do Bilhão*.

O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 20 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo. 

O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.

O proprietário da emissora requisitou que você desenvolvesse uma aplicação web que gerencie as perguntas do jogo. Mais especificamente, esse sistema irá fazer o controle das respostas do jogo


## Introdução: Prova de Conceito

O primeiro passo é elaborar uma prova de conceito para mostrar ao conselho diretor. Implemente uma página em PHP que carregue e exiba as perguntas (Todas na mesma página).

Segue alguns requisitos:
* Você deverá utilizar arrays para armazenar os dados das perguntas:
    * um vetor para enunciados
    * uma matriz (vetor de vetores) com as alternativas
    * um vetor com o índice para a alternativa certa
* Deverá haver um loop que irá iteragir com cada pergunta para carregá-la e exibi-la na página