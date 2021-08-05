<?php
session_start();

include '../../model/conexaopdo.php';
    
$nomeCliente = $_POST['nomeCliente'];
$cpfCliente = $_POST['cpfCliente'];
$sql = "INSERT INTO clientes (nomeCliente, cpfCliente) values(:nomeCliente, :cpfCliente)";

$stmt = $conn->prepare($sql);
$stmt ->bindParam(":nomeCliente", $nomeCliente);
$stmt ->bindParam(":cpfCliente", $cpfCliente);

$exe = $stmt ->execute();

if (!$exe){
    
    echo "erro";
}
header('location: ../../view/client/listarClientes.php');