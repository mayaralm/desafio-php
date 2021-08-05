<?php
session_start();
include '../../model/conexaopdo.php';
    
$nomeproduto = $_POST['nomeproduto'];
$descricaoproduto = $_POST['descricaoproduto'];
$precoproduto = $_POST['precoproduto'];

$sql = "INSERT INTO produtos (nome, descricao, preco) values(:nomeproduto, :descricaoproduto, :precoproduto)";

$stmt = $conn->prepare($sql);
$stmt ->bindParam(":nomeproduto", $nomeproduto);
$stmt ->bindParam(":descricaoproduto", $descricaoproduto);
$stmt ->bindParam(":precoproduto", $precoproduto);

$entrar = $stmt ->execute();
if (!$entrar){
    
    echo "erro";
}
header('location: ../../view/prod/listarProdutos.php');