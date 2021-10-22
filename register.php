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
    
    $file = 'data\players.json';
    $password = $username = "";
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $password = test_input($_POST["password"]);
            $email = test_input($_POST["email"]);
            $username = test_input($_POST["username"]);
            
            $Players = [];
            $players_read = json_decode(file_get_contents($file), true);
            foreach($players_read as $player){
                array_push($Players, $player);
                if($player["username"] === $username && $player ["email"] === $email){
                    echo '<script>alert("Already have a user with this email/username!")</script>';
                    exit();
                }
            }
            
            $_SESSION['Player'] = new \models\Player(0, $_POST['username'], $_POST['email'], $_POST['password']);
            array_push($Players, $_SESSION['Player']);    
            $fh = fopen($file, 'w') or die("can't open file");
            fwrite($fh, json_encode($Players));
            fclose($fh);
            header("Location: index.php");
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
    
    <form id="register" class="white" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
        <div class="vertical-grid">
            <h1>Register</h1>
            <h2>Please enter your credentials to Sign-up</h2></br> 
            <input id="user" type="text" placeholder="Email" name="email" required>  
            <input id="user" type="text" placeholder="Username" name="username" required>  
            <input type="password" placeholder="Password" name="password" required>  
            <button type="submit" form="register" value="Submit" class="dark">Submit</button>
            <p>Have an account? <a href="login.php">Sign in</a></p>  
        </div>  
    </form>    

    <?php echo getFooter() ?>
</body>
</html>