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
	  <h2>Cadastre-se para jogar</h2>
	  <form action="Cadastrando.php" method="post"> <!--vai pro php cadastrando !-->
	    <div class="form-group">
	        <label for="ex2">Nome:</label>
	        <input class="form-control" id="ex2" type="text" placeholder="Name" name="nome">
	      </div>
        <div class="form-group">
	        <label for="ex2">Email:</label>
	        <input class="form-control" id="ex2" type="text" placeholder="Email" name="email">
	    </div>
        <div class="form-group">
	        <label for="ex2">Login:</label>
	        <input class="form-control" id="ex2" type="text" placeholder="Login" name="login">
	   </div>
	    <div class="form-group">
	        <label for="ex2">Senha:</label>
	        <input type="password" class="form-control" placeholder="Senha" name="pwd">
	    </div>
	    <button type="submit" class="btn btn-default">Cadastrar!</button>
	  </form>
	</div>

	</body>
</html>
