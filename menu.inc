<style>
    .menu--titulo{
        font-size: 2em;
        margin: auto;
        display: inline;
    }
    .menu{
        display: inline;
    }
    .menu--lista{
        display: inline-flex;
        justify-content: space-around;
        gap: 2em;
    }
    .lista--item{
        display: inline;
    }
    .item--link{
        text-decoration: none;
        color: black;
    }
</style>


<h1 class="menu--titulo">Show do Bilhão</h1>
<nav class="menu">
    <ul class="menu--lista">
        <li class="lista--item"><a class="item--link" href="http://localhost:8000/perguntas.php?id=0">Pergunta 1</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8080/perguntas.php?id=1">Pergunta 2</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8080/perguntas.php?id=2">Pergunta 3</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8080/perguntas.php?id=3">Pergunta 4</a></li>
        <li class="lista--item"><a class="item--link" href="http://localhost:8080/perguntas.php?id=4">Pergunta 5</a></li>
        <br>
    </ul>
</nav>