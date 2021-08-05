<?php
    include_once '../../model/conexao.php';
?>
<link href="../../css/estiloListagem.css" rel="stylesheet" media="all" />


<div>
        
    <div>
            <h1>Histórico de Produtos </h1>
    </div>
    <div class="menu">
        <button><a href="../../index.php">Inicio</a></button>
        <button><a href="cadastrarProduto.php"> Cadastrar Novo</a><br></button>
    </div>

    <div>
        <table>
                <thead>
                    <tr class="borda">
                        <th>ID</th>
                        <th>NOME</th>
                        <th>DESCRIÇÃO</th>
                        <th>PREÇO</th>
                        <th>OPÇÕES</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $sql = "SELECT * FROM produtos";
                    $resultado = mysqli_query($conn, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) :
                    ?>
                        <tr>
                            <td><?php echo $dados['id']; ?></td>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['descricao']; ?></td> 
                            <td><?php echo $dados['preco']; ?></td>                             
                            <td>
                                <button>
                                <a class="myButton" href="editarProduto.php?id=<?php echo $dados['id']; ?>">
                                    edit/delete
                                </a>
                                </button>
                            </td>

                        </tr>
                    <?php endwhile; ?>
                </tbody>

        </table><br>
    </div>

</div>


<footer class="footerProduto">     
    <h4>&copy;Mayara Leite</h4>
</footer>


