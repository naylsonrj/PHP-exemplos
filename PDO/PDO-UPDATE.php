<?php

//Sql server
$conn = new PDO(
  "sqlsrv:Server=localhost\SQLEXPRESS;
  Database=dbphp7",
  "naylson",
  "Admin789"
);

//ATUALIZANDO DADOS NA TABELA
$stmt = $conn->prepare("UPDATE 
tb_usuarios SET 
deslogin = :LOGIN, 
dessenha = :PASSWORD 
WHERE idusuario = :ID ");

// valores para atualizar
$login = "UpNome";
$password = "teste";
$id = 8;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "USUARIO ALTERADO";
