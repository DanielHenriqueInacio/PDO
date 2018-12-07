<?php

include "conexao.php";

$id = $_GET['id'] ?? false;
    if($id === false) {
        die("parametro de identificação ausente") ;
    } 
$nome = $_POST['nome'];
$descricao = $_POST['desc'];

$sql = "update racas set nome=:nome, descricao=:descricao where id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->execute();

header('location: /raca_listar.php');