<?php

include_once '../../model/conexao.php';
    if(isset($_GET['id'])):
        $id= mysqli_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM produtos WHERE id='$id'";
        $resultado = mysqli_query($conn, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto </title>
</head>
<body>


<div>  
    <form action="../../controller/prod/updateController.php" method="post">
    <h3>Editar</h3> 
    <hr><br>
    <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        <label>Nome</label>
            <input type="text" maxlength="50" required name="nome" value="<?php echo $dados['nome'];?>"  />             
            <br><br>
        <label>Descrição</label>
            <input type="text" maxlength="30" required name="descricao" value="<?php echo $dados['descricao'];?>"  />             
            <br><br>
        <label>Preço</label>
            <input type="text" maxlength="30"required name="preco" value="<?php echo $dados['preco'];?>"  />             
            <br><br>         
        <button type="submit" name="btn-editarProduto">Atualizar</button>  
        <button type="submit" name="btn-deleteProduto">Deletar</button> 
        <a href="listarProdutos.php"><input type="button" value="Cancel" /></a>
    </form>  
</div> 
   
    
</body>
</html>