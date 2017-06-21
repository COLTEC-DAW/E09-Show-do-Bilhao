<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css"  href="style.css" />
        <title>Clarisse Scofield</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <style type="text/css">#title,#glyphs h1{font-family:"Open Sans Condensed Light"}</style>    
        
    </head>
    <body>
    
    <div id="header">
        <h1>Show do bilhão</h1>
        <h2 > Uma chance, um jogo!</h2>
     </div>

	<div class="container">
	  <h2>Identifique-se para jogar</h2>
	  <form action="ConfereLogin.php" method="post"> <!--vai pra primeira pergunta !-->
	    <div class="form-group row">
	      <div class="col-xs-3">
	        <label for="ex2">Nome:</label>
	        <input class="form-control" id="ex2" type="text" name="nome">
	      </div>
	      <div class="col-xs-3">
	        <label for="ex2">Senha:</label>
	        <input type="password" class="form-control" name="pwd">
	      </div>
	    </div>
	    <button type="submit" class="btn btn-default">Começar!</button>
	  </form>
	</div>

	</body>
</html>
