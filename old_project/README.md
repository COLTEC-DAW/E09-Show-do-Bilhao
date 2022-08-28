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

## Separando uma pergunta por página

Agora que a prova de conceito foi implementada, você deverá separar as perguntas de forma a exibir uma por página. Para poder definir qual pergunta será exibida, a página receberá como parâmetro de uma requisição do tipo `GET` o índice de acesso da pergunta que será exibida. Por exemplo, uma requisição para `http://localhost:8080/perguntas.php?id=3` irá carregar na página `perguntas.php` a pergunta armazenada na posição 3 do vetor.

Segue alguns requisitos:
* A pergunta deverá ser recuperada através de uma função chamada `carregaPergunta($id)` que irá acessar o vetor de perguntas, alternativas e respostas, e retornar os dados referentes a pergunta selecionada.
* A função implementada anteriormente deverá ser armazenada em um partial chamado `perguntas.inc`. Esse partial conterá funções auxiliares que irão manipular as perguntas da página. É importante ressaltar que esse conjunto de funções é fundamental para o funcionamento do sistema.
* A sua página conterá alguns trechos em HTML que poderão ser reaproveitados em outros momentos, como menu, rodapé, etc. Crie dois arquivos, chamados `menu.inc` e `rodape.inc` que irão armazenar o código HTML do menu e rodapé, e importe-os na página de perguntas. Diferentemente do arquivo `perguntas.inc`, o sistema pode tolerar eventuais problemas de carregamento do menu e rodapé.

## Checando respostas

Agora que as perguntas foram separadas por página. Você deverá implementar a lógica de evolução do jogo. Ao entrar na página inicial do jogo, a primeira pergunta deverá ser carregada. O usuário então seleciona a alternativa que ele julgar correta e submete a resposta. O sistema deverá verificar a resposta do usuário. Caso a resposta esteja correta, o usuário avança para a próxima pergunta. Caso contrário ele deverá ser redirecionado para uma página de game over.

Segue alguns requisitos:
* As alternativas para as perguntas deverão ser fornecidas por meio de um formulário, para possibilitar o envio da resposta ao servidor
* Seu sistema deverá exibir um progresso do jogo (Quantas perguntas ele acertou, por exemplo).
* Os dados deverão ser enviados através de requisições do tipo `POST`.

*dica: você precisará enviar entre as requisições um identificador de qual pergunta será mostrada ao usuário. Pesquise sobre __hidden input fields__.*

## Identificando o jogador

Chegou a hora de seu programa identificar o jogador que está participando do jogo. Utilize os conceitos de sessões e cookies para identificar quem está jogando. O jogador que está jogando no momento deverá ser identificado por meio de sessão. Utilize cookies para mostrar ao usuário quando foi a última vez que ele jogou e qual foi sua última pontuação.

Segue alguns requisitos:
* O jogador não poderá acessar as perguntas se ele não tiver sido identificado antes. Ou seja, você precisará implementar um simples método de autenticação.
* Deverá haver uma opção para que o jogador se desidentifique do jogo para que outro possa jogar. Ou seja, você precisará implementar uma rotina de logout.

## Arquivos

Agora que a mecânica principal do sistema está funcionando, podemos estender o sistema implementando rotinas para persistência de dados. 

A persistência pode se dar basicamente por meio de **arquivos** e **banco de dados**. Nesse etapa nós iremos implementar nossa persistência no formato de **arquivos**.  

### Parte 01: Usuários

Você deverá implementar um módulo de cadastro e autenticação que irá gerenciar os usuários do sistema. Os dados dos usuários deverão ficar armazenados em um único arquivo, chamado `users.txt`.

Os usuários deverão fornecer os seguintes dados para realizar o cadastro (que deverão ser armazenados no arquivo, obviamente):

* Nome
* E-mail
* Login
* Senha

O login deverá ser feito através do login e senha do usuário. Durante o processo de login, o sistema deverá verificar se existe um usuário com este login e, caso exista, verificar se a senha é correta. Caso a autenticação falhe, uma mensagem de erro deverá ser retornada para o usuário.

### Parte 02: Perguntas

As perguntas também deverão ser manipuladas através de um arquivo texto. Você deverá implementar um módulo que irá fazer a leitura das perguntas de um arquivo chamado `perguntas.txt`.

Cada pergunta armazenada no arquivo deverá conter:

* Enunciado
* Alternativas disponíveis
* Alternativa correta

### Dicas Gerais

Manipular dados diretamente por meio de arquivos pode dar muito trabalho. Porém, você pode economizar muito trabalho se utilizar uma forma **estrutural** de armazenamento. Entre as formas estruturais disponíveis, o PHP fornece suporte nativo para [`JSON`](https://secure.php.net/manual/pt_BR/book.json.php) e [`XML`](https://www.w3schools.com/php/php_xml_simplexml_read.asp).

Caso você opte pelo formato `JSON`, sugiro a seguinte estruturação para usuários e perguntas:

`usuários.json`

    [   
        ...
        {
            "login": "valor",
            "senha": "valor",
            "email": "valor@v.com",
            "nome": "valor"
        },
        {
            "login": "valor",
            "senha": "valor",
            "email": "valor@v.com",
            "nome": "valor"
        }, 
        ...
    ]

`perguntas.json`

    [
        ...
        {
            "enunciado": "bla bla bla",
            "alternativas": ["alt1", "alt2", "alt3", ...],
            "resposta": 1
        },
        {
            "enunciado": "bla bla bla",
            "alternativas": ["alt1", "alt2", "alt3", ...],
            "resposta": 1
        },
        ...
    ]

## Modelando os dados no sistema

Agora que os dados do nosso sistema foram modelados estruturalmente dentro dos arquivos, podemos replicar essa estrutura dentro do código do próprio sistema aplicando conceitos de POO.

### Entidades Básicas

Você deverá implementar as classes `User` e `Question` que deverão manipular os usuários e perguntas do sistema. Essas classes deverão possuir atributos para armazenar as informações contidas no arquivo de cada usuário.

### Trafegando objetos no sistema

Agora que os dados do nosso sistema estão encapsulados no formato de objetos, fica muito mais fácil trafegar essas informações entre as páginas e requisições.

Você deverá encontrar os pontos do sistema onde os dados são manipulados separadamente e alterar de forma que esses dados estejam encapsulados em seus respectivos objetos e que a manipulação se dê por meio dos objetos criados.