<?php

    $host = "";
    $user = "";
    $pass = "";
    $database = "";

    $conn = mysqli_connect("$host","$user", "$pass", "$database");
   
    // teste de conexão / relatando erros
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // inicio database
    // INSERINDO DADOS COM BIND_PARAMETRO
    $name_item = "suporte para wecam";
    $description_item = "Suporte novo e foi fabricado na china";

    $stmt = $conn->prepare("INSERT INTO acessorios(name_item, description_item) VALUES (?, ?)");

    $stmt->bind_param("ss", $name_item, $description_item); // s = string, i = integer, d = double

    $stmt->execute();
    
    
?>