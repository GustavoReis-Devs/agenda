<?php

  session_start();

  include_once("connecion.php");  

  $contacts = []

  $query = "SELECT * FROM contacts";

  $stmt = $conn->prepare($query);

  $stmt->execute();

  $contacts = $stmt->fetchAll();