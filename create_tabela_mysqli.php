<?php

    $host = "";
    $user = "";
    $pass = "";
    $database = "";
 

    $conn = mysqli_connect("$host","$user", "$pass", "$database");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected to MySQL server successfully!";
    }
       // assunto da aula

    // $q = "CREATE TABLE acessorios (name VARCHAR(100), description VARCHAR(100))"; // criar tabela

    // $q =  "DROP TABLE carro";  //deletar tabela

   $conn->query($q);
   $conn->close(); 
   ?>

