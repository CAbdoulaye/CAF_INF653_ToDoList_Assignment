<?php
  $dsn = 'mysql:host=localhost;dbname=todolist';
  $username = 'root';
  //$password = 'YES';

  try {
    $db = new PDO($dsn, $username, $password);

  } catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
  }
?>