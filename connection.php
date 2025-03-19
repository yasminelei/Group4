<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "database1";  
    $conn = new mysqli("localhost", "root", "", "database1", 3306);
    $conn = new mysqli("localhost", "root", "", "database1", 3306);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo " ";
    
    ?>