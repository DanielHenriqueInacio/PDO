<?php

include "conexao.php";

$id = $_GET['id'] ?? false;

$sql = "delete from racas where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

header('location: /raca_listar.php');