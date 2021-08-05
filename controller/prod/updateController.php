<?php

session_start();

require_once '../../model/conexao.php';

if(isset($_POST['btn-editarProduto'])):
    $nome= mysqli_escape_string($conn, $_POST['nome']);
    $descricao = mysqli_escape_string($conn, $_POST['descricao']);
    $preco= mysqli_escape_string($conn, $_POST['preco']);
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id='$id'";

    if(mysqli_query($conn, $sql)):
        $_SESSION['mensagem'] = "Dados Atualizado !";
        header('location: ../../view/prod/listarProdutos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar !";
        header('location: ../../view/prod/editarProduto.php');
    endif;
endif;


if (isset($_POST['btn-deleteProduto'])) :
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $descricao = mysqli_escape_string($conn, $_POST['descricao']);
    $preco = mysqli_escape_string($conn, $_POST['preco']);
    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM produtos WHERE produtos.id='$id'";

    if (mysqli_query($conn, $sql)) :
        $_SESSION['mensagem'] = "Dados Atualizado !";
        header('location: ../../view/prod/listarProdutos.php');
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar !";
        header('location: ../../view/prod/editarProduto.php');
    endif;
endif;
