<?php

    $host = "";
    $user = "";
    $pass = "";
    $database = "";

    $conn =  mysqli_connect("$host","$user", "$pass", "$database");
   
    // teste de conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // inicio 
    $id = 2;
    $stmt = $conn->prepare("SELECT * FROM acessorios");
     /*   ou 
     $stmt = $conn->prepare("SELECT * FROM acessorios WHERE id > ?");  
     $stmt->bind_param('i', $id); */
 

    
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_all(); 
    print_r($item);
    $conn->close();
    
?>
    