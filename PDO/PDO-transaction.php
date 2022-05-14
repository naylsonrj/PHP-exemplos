<?php

//Sql server
$conn = new PDO(
  "sqlsrv:Server=localhost\SQLEXPRESS;
  Database=dbphp7",
  "naylson",
  "Admin789"
);

//TRANSACAO COM PDO
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID ");

$id = 7;

$stmt->execute(array($id));
$conn->rollBack(); // em caso de erro delete
echo "deletando";
