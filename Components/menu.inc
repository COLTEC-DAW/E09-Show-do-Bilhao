<head>
    <link rel="stylesheet" href="../Styles/">
</head>


<h1 class="menu--titulo">Show do Bilhão</h1>
<nav class="menu">
    <ul class="menu--lista">
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=0">Começar jogo</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=0">Pergunta 1</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=1">Pergunta 2</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/Pages/perguntas.php?id=2">Pergunta 3</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=3">Pergunta 4</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=4">Pergunta 5</a></li>
        <br>
    </ul>
</nav>
<?php 
echo $_COOKIE["ultimoAcesso"];
echo $_COOKIE["ultimaPontuacao"];
?>