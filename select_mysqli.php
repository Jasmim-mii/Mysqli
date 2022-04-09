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
     
        //SELECT
    $q = "SELECT * FROM acessorios";


    $result = $conn->query($q);
    $conn->close();

    // UM RESULTADO
    $acessorios = $result->fetch_assoc();

   // TODOS OS RESULTADOS
    $acessorios = $result->fetch_all();
    print_r($acessorios)
    
?>
    