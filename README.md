# PHP: O Show do Bilhão

Nesta série de exercícios iremos praticar o uso da linguagem PHP desenvolvendo uma aplicação web de perguntas e respostas denominado *Show do Bilhão*.

O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo. 

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

#### um vetor para enunciados
```php
$questoes = [
  1 => 'No poema, aparece a palavra "só", corretamente acentuada. Assinale a alternativa que contenha apenas palavras corretamente acentuadas pela mesma regra.',
  2 => 'Renato pediu empréstimo ao banco para pagamento em um ano com taxa anual real de juros de 28%. Sabendo que a inflação prevista para o período é de 7%, a taxa aparente de juros é de, aproximadamente:',
  3 => 'Dos 50 detentos de um presídio, 17 cometeram o crime de latrocínio, 32 cometeram o crime de estupro e 25 cometeram o crime de estupro, mas não o de latrocínio. Nesse caso, é correto afirmar que',
  4 => 'Considerando a anatomia humana, a cavidade abdominal é separada da torácica pelo',
  5 => 'Zeus trabalha há dois anos no posto de abastecimento de combustíveis Deuses do Olimpo Centro Automotivo, exercendo a função de frentista, executando o abastecimento de automóveis. Conforme normas de segurança e da medicina do trabalho, Zeus faz jus ao pagamento de adicional de:',
];
```

#### uma matriz (vetor de vetores) com as alternativas
```php
$respostas = [
  1 => [
    1 => "a) Cipó, quatí e dendê.",
    2 => "b) Ipê, pó e pá.",
    3 => "c) Pôs, nós e pó. CERTA",
    4 => "d) Pó, pé e arára.",
    5 => "e) Pá, pé e cipó.",
  ],
  2 => [
    1 => "a) 33%",
    2 => "b) 34%",
    3 => "c) 35%",
    4 => "d) 36%",
    5 => "e) 37% CERTA",
  ],
  3 => [
    1 => "a) 40 detentos cometeram ou o crime de latrocínio ou o crime de estupro.",
    2 => "b) 15 detentos cometeram o crime de latrocínio, mas não o de estupro.",
    3 => "c) 5 detentos cometeram os crimes de latrocínio e de estupro.",
    4 => "d) 45 detentos cometeram um ou os dois crimes (latrocínio e estupro).",
    5 => "e) 8 detentos não cometeram nem o crime de latrocínio nem o de estupro. CERTA",
  ],
  4 => [
    1 => "a) pericárdio.",
    2 => "b) fígado.",
    3 => "c) diafragma. CERTA",
    4 => "d) hipogástrio.",
    5 => "e) mediastino.",
  ],
  5 => [
    1 => "a) insalubridade, no valor de 30% calculado sobre toda a sua remuneração.",
    2 => "b) penosidade, no importe de 35% calculado sobre o salário-mínimo regional.",
    3 => "c) periculosidade, no valor de 30% calculado sobre seu salário, sem os acréscimos resultantes de gratificações prêmios ou participação nos lucros da empresa. CERTA",
    4 => "d) periculosidade, variando entre 10%, 20% ou 40% calculado sobre o salário-mínimo nacional.",
    5 => "e) transferência e risco, no valor de 25% calculado sobre o seu salário-base, sem nenhum acréscimo.",
  ],
];
```
#### um vetor com o índice para a alternativa certa
```php
$respostas_certas = [
  1 => 3,
  2 => 5,
  3 => 5, 
  4 => 3,
  5 => 3,
];
```
#### um loop que irá iteragir com cada pergunta para carregá-la e exibi-la na página
```php
for ($i = 1; $i <= 5; ++$i){
  echo '<h3>'.$questoes[$i].'</h3>';
  for ($k = 1; $k <= 5; ++$k){
    echo $k == $respostas_certas[$i] ? '<p><b>'.$respostas[$i][$k].'</b><p>' :  '<p>'.$respostas[$i][$k].'<p>';
  }
}
```


## Separando uma pergunta por página

Agora que a prova de conceito foi implementada, você deverá separar as perguntas de forma a exibir uma por página. Para poder definir qual pergunta será exibida, a página receberá como parâmetro de uma requisição do tipo `GET` o índice de acesso da pergunta que será exibida. Por exemplo, uma requisição para `http://localhost:8080/perguntas.php?id=3` irá carregar na página `perguntas.php` a pergunta armazenada na posição 3 do vetor.

Segue alguns requisitos:
* A pergunta deverá ser recuperada através de uma função chamada `carregaPergunta($id)` que irá acessar o vetor de perguntas, alternativas e respostas, e retornar os dados referentes a pergunta selecionada.
* A função implementada anteriormente deverá ser armazenada em um partial chamado `perguntas.inc`. Esse partial conterá funções auxiliares que irão manipular as perguntas da página. É importante ressaltar que esse conjunto de funções é fundamental para o funcionamento do sistema.
* A sua página conterá alguns trechos em HTML que poderão ser reaproveitados em outros momentos, como menu, rodapé, etc. Crie dois arquivos, chamados `menu.inc` e `rodape.inc` que irão armazenar o código HTML do menu e rodapé, e importe-os na página de perguntas. Diferentemente do arquivo `perguntas.inc`, o sistema pode tolerar eventuais problemas de carregamento do menu e rodapé.
