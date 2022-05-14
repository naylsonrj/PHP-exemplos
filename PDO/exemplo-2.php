<?php

//Mysql 
// $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");
//

//Sql server
$conn = new PDO(
  "sqlsrv:Server=localhost\SQLEXPRESS;
  Database=dbphp7",
  "naylson",
  "Admin789"
);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);
