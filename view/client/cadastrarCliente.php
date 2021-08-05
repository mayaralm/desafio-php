<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View de Clientes </title>
    <link href="../../css/estiloCadastro.css" rel="stylesheet" media="all" />
</head>
<body>

<div>            
    <h1>Novo Usuario</h1> 
    <form action="../../controller/client/insertController.php" method="post" tabindex="1">
    <hr><br>
        <label>Nome do Cliente:</label>
            <input type="text" maxlength="50" required name="nomeCliente" placeholder="Nome do cliente"  />             
            <br><br>
        <label>CPF / CNPJ do Cliente</label>
            <input type="text" maxlength="30" required name="cpfCliente" placeholder="CPF/CNPJ"  />             
            <br><br>
        <button type="submit" name="btn-cadastrar" class="cadCliente">Cadastrar</button>
        <a href="../../index.php"><input type="button" value="Cancelar" /></a>
    </form>  
</div>


<footer>         
    <h4>&copy;Mayara Leite</h4>
</footer>


</body>
</html>