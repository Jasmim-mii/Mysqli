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
    $name = "teclado";

    $stmt = $conn->prepare("DELETE FROM acessorios WHERE name_item = ?");
    $stmt-> bind_param("s", $name);

    $stmt->execute();
    $conn->close();
?>
    