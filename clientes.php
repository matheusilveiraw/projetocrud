<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container text-center">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10"> 
            <h1>Clientes</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) {

                    while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $dados['id'];?></th>
                                <td><?php echo $dados['nome'];?></td>
                                <td><?php echo $dados['sobrenome'];?></td>
                                <td><?php echo $dados['cpf'];?></td>
                                <td><?php echo $dados['idade'];?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="clientes.php" role="button"><i data-feather="edit"></i></a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="clientes.php" role="button"><i data-feather="trash-2"></i></a>
                                </td>
                            </tr>
                        </tbody>

                    <?php
                    }
                } else { ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                <?php
                }

                ?>
            </table>
            <div class="container text-left">
                <a class="btn btn-success btn-lg col-sm-3" href="cadastro_cliente.php" role="button">Cadastrar</a>

                <a class="btn btn-warning btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class="col"> </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>