<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mySuperDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS example_table (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user VARCHAR(30) NOT NULL,
        senha VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $tableName = "mySTable";

    // Query the table
    $sql = "SELECT * FROM " . $tableName;

    $result = $conn->query($sql);

    $user = $_POST["login"];
    $senha = $_POST["senha"];

    if ($result->num_rows > 0) {
        // Loop through the result set
        while ($row = $result->fetch_assoc()) {
            if($row["user"] == $user){
                if($row["senha"] == $senha){
                    setcookie("login", $user);
                    echo "<p>usuario autenticado: " . $user . "</p>";
                    header('Location:  /?' . http_build_query($dados));
                }else{
                    setcookie("login", NULL);
                    echo "Usuário ou senha incorretos";
                }
            }
            else{
                setcookie("login", NULL);
                echo "Usuário ou senha incorretos";
            }
        }
    } else {
        setcookie("login");
        echo "No records found";
    }

    $dados = array('login' => $user);

    echo $_COOKIE["login"];
    
    // Close the connection*/
    $conn->close();
?>

<a href="/create.php">
    <button>Create user</button>
</a>


