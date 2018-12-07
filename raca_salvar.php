<?php
if (!session_id()) @session_start();
include "conexao.php";
include "vendor/autoload.php";


$msg = new \Plasticbrain\FlashMessages\FlashMessages();

$nome = $_POST['nome'];
$descricao = $_POST['desc'];

$sql = "insert into racas (nome, descricao) values(:nome, :descricao)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);
$stmt->execute();

$msg->success("Raça cadastrada com sucesso!", "/raca_listar.php");

//header('location: /raca_listar.php');

$raca = Raca::findAll();
Raca::find()->all();

$raca->nome = "Mago";
$raca->descricao = "Mago bacana";
$raca->save();