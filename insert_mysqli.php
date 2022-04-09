<?php

    $host = "";
    $user = "";
    $pass = "";
    $database = "";
 

    $conn = mysqli_connect("$host","$user", "$pass", "$database");
    // teste de conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // inicio database
     
        //INSERIR DADOS
    
    $db = "acessorios";
    $name_item = "Pulseira";
    $description_item = "Pulseira de prata com detalhes";

    $q = "INSERT INTO $db (name_item, description_item) VALUES('$name_item', '$description_item')";


   $conn->query($q);
   $conn->close(); 
   ?>
