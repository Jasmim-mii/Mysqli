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
    $id = 6;

    $stmt = $conn->prepare("UPDATE acessorios SET name_item = ?, description_item = ? WHERE id = ?");

    $name = "Notebook";
    $description = "Notebook Dell i7, hd 2TB, 8GB";

    $stmt->bind_param("ssi", $name, $description, $id);  // ssi = string, string, inteiro
    $stmt->execute();

    if($stmt->error){
        echo "Error: " . $smtp->error;
    }
    $conn->close();
?>
   