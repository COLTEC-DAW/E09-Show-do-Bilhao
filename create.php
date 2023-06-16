<?php
     $servername = "localhost";
     $username = "user";
     $password = "afbtorres";
     $database = "mySData";
 
     // Create connection
     $conn = new mysqli($servername, $username, $password, $database);
 
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
 
 
 
     // Create table
     $sql = "CREATE TABLE IF NOT EXISTS mySTable (
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

     $stmt = $conn->prepare("INSERT INTO mySTable (user, senha) VALUES (?, ?)");

     // Bind parameters
     $stmt->bind_param("ss", $user, $senha);
 
     // Set the values of the parameters
     $user = $_POST["login"];
     $senha = $_POST["senha"];

 
     // Execute the statement
     if ($stmt->execute()) {
         echo "Record inserted successfully";
         setcookie("login", $user);
         header('Location:  /?' . http_build_query($dados));
     } else {
         echo "Error inserting record: " . $stmt->error;
     }
 
     $stmt->close();
     $conn->close();

?>