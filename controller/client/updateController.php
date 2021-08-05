<?php

session_start();

require_once '../../model/conexao.php';

if(isset($_POST['btn-editarCliente'])):
    $nomeCliente= mysqli_escape_string($conn, $_POST['nomeCliente']);
    $cpfCliente = mysqli_escape_string($conn, $_POST['cpfCliente']);
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "UPDATE clientes SET nomeCliente = '$nomeCliente', cpfCliente = '$cpfCliente' WHERE id='$id'";

    if(mysqli_query($conn, $sql)):
        $_SESSION['mensagem'] = "Dados Atualizado !";
        header('location: ../../view/client/listarClientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar !";
        header('location: ../../view/editarCliente.php');
    endif;    
endif;


if (isset($_POST['btn-deleteCliente'])) :
    $id = mysqli_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM clientes WHERE clientes.id='$id'";

    if (mysqli_query($conn, $sql)) :
        $_SESSION['mensagem'] = "Dados Atualizado !";
        header('location: ../../view/client/listarClientes.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar !";
        header('location: ../../view/editarProduto.php');
    endif;
endif;

