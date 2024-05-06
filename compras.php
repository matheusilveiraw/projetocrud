<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container text-center flex-grow-1 mt-5">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10"> 
            <h1>Compras</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Data da compra</th>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT c.id, cl.nome AS cliente_nome, p.nome AS produto_nome, c.quantidade, c.data_compra FROM compra c 
                JOIN clientes cl ON c.cliente_id = cl.id
                JOIN produtos p ON c.produto_id = p.id";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) {


                    while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $dados['id'];?></th>
                                <td><?php echo $dados['cliente_nome'];?></td>
                                <td><?php echo $dados['produto_nome'];?></td>
                                <td><?php echo $dados['quantidade'];?></td>
                                <td><?php echo $dados['data_compra'];?></td>

                                <td>
                                    <a class="btn btn-warning btn-sm" href="editar_compra.php?id=<?php echo $dados['id']?>.php" role="button"><i data-feather="edit"></i></a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="banco_de_dados/delete_compra.php?id=<?php echo $dados['id']?>" role="button"><i data-feather="trash-2"></i></a>
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
                    </tr>

                <?php
                }

                ?>
            </table>

            <div class="container text-center">
                <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cadastro_compra.php" role="button">Cadastrar</a>

                <a class="btn btn-secondary btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class="col"> </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>