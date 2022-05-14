<?php

//Sql server
$conn = new PDO(
  "sqlsrv:Server=localhost\SQLEXPRESS;
  Database=dbphp7",
  "naylson",
  "Admin789"
);

//INSERIR DADOS NA TABELA
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Meireles";
$password = "7894563114565";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "USUARIO INSERIDO";
