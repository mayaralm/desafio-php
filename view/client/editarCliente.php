<?php

include_once '../../model/conexao.php';

    if(isset($_GET['id'])):
        $id= mysqli_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM clientes WHERE id='$id'";
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
    <title>Editar</title>
</head>
<body>

<div>
    <form action="../../controller/client/updateController.php" method="post">
        <h3>Editar</h3> 
        <hr><br>

        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        <label>Nome do Cliente</label>
            <input type="text" maxlength="50" required name="nomeCliente" value="<?php echo $dados['nomeCliente'];?>"  />             
            <br><br>

        <label>CPF/CNPJ</label>
            <input type="text" maxlength="30" required name="cpfCliente" value="<?php echo $dados['cpfCliente'];?>"  />             
            <br><br>
            
        <button type="submit" name="btn-editarCliente">Atualizar</button>  
        <button type="submit" name="btn-deleteCliente">Deletar</button> 
        <a href="listarClientes.php"><input type="button" value="Cancel" /></a> 
    </form>  
</div> 
    
    
</body>
</html>