<?php
  try {
    $con = new PDO("mysql:host=localhost;dbname=bdeventos", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}
?>