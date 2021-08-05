<?php
include_once '../../model/conexao.php';
?>
<link href="../../css/estiloListagem.css" rel="stylesheet" media="all" />
<div>
    <div>
        <h1>Histórico de Clientes </h1>            
    </div>
    <div class="menu">
        <button><a href="../../index.php">Inicio</a></button>
        <button><a href="cadastrarCliente.php">Cadastrar Novo</a><br></button>
    </div>
    
    <div>
        <table> 
    
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CPF/CNPJ</th>
                    <th>OPÇÕES</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($conn, $sql);
                while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                    <tr>
                        <td><?php echo $dados['id']; ?></td>
                        <td><?php echo $dados['nomeCliente']; ?></td>
                        <td><?php echo $dados['cpfCliente']; ?></td>                            
                        <td>
                            <button>
                                <a class="myButton" href="editarCliente.php?id=<?php echo $dados['id']; ?>">
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

<footer class="footerCliente">         
    <h4>&copy;Mayara Leite</h4>
</footer>



