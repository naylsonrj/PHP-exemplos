<?php

//Sql server
$conn = new PDO(
  "sqlsrv:Server=localhost\SQLEXPRESS;
  Database=dbphp7",
  "naylson",
  "Admin789"
);

//DELETANDO DADOS NA TABELA
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID ");

$id = 6;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "USUARIO DELETADO";
