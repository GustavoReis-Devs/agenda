<?php
  $host = "3306"; 
  $dbname = "age41290_agenda";
  $user = "age41290_agen";
  $pass = "1*%M!$5QG$sp";

  try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    //Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
  }