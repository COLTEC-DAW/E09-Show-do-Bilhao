<?php
    include 'lib\header.inc';
    include 'lib\footer.inc';
    include 'models\player.php';

    session_start();

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $password = $username = "";
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $password = test_input($_POST["password"]);
            $username = test_input($_POST["username"]);
           
            $players_read = json_decode(file_get_contents('data\players.json'), true);
            foreach($players_read as $player){
                if($player["username"] === $username && $player ["password"] === $password){
                    $_SESSION['Player'] = new \models\Player($player['id'], $player['username'], $player['email'], $player['password']);
                    header("Location: index.php");
                    exit();
                }
            }
            echo '<script>alert("Username or Password Invalid!")</script>';
        }   
        else
        {
            echo '<script>alert("Fill in all requested fields!")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Show do Bilhão</title>
</head>

<body>
    <?php echo getHeader() ?>
    
    <form id="login" class="dark" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
        <div class="vertical-grid">
            <h1>Login</h1>
            <h2>Enter your credentials to login</h2></br>  
            <input id="user" type="text" placeholder="Username" name="username" required>  
            <input type="password" placeholder="Password" name="password" required>  
            <button type="submit" form="login" value="Submit" class="white">Submit</button>
            <p><a href="#">Forgot your password? </a></p>
            <p>Not registered? <a href="register.php">Create an account </a></p>  
        </div>  
    </form>    

    <?php echo getFooter() ?>
</body>
</html>