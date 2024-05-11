<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php';

if (isset($_GET['sucessoCadastro'])) {
?>
    <div class="alert alert-success" role="alert">
        Cadastro efetuado com sucesso!
    </div>
<?php
}
if (isset($_GET['erroCadastro'])) {
?>
    <div class="alert alert-danger" role="alert">
        Houve algum erro no cadastro!
    </div>
<?php
}
if (isset($_GET['sucessoDelete'])) {
?>
    <div class="alert alert-success" role="alert">
        Cadastro deletado com sucesso!
    </div>
<?php
}
if (isset($_GET['erroDelete'])) {
?>
    <div class="alert alert-danger" role="alert">
        Erro ao deletar!
    </div>
<?php
}

if (isset($_GET['sucessoUpdate'])) {
?>
    <div class="alert alert-success" role="alert">
        Cadastro atualizado com sucesso!
    </div>
<?php
}
if (isset($_GET['erroUpdate'])) {
?>
    <div class="alert alert-danger" role="alert">
        Erro ao atualizar!
    </div>
<?php
}
?>
<div class="container text-center flex-grow-1 mt-5">
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
                                <th scope="row"><?php echo $dados['id']; ?></th>
                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['sobrenome']; ?></td>
                                <td><?php echo $dados['cpf']; ?></td>
                                <td><?php echo $dados['idade']; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="editar_cliente.php?id=<?php echo $dados['id'] ?>.php" role="button"><i data-feather="edit"></i></a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="banco_de_dados/delete_cliente.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="trash-2"></i></a>
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

            <div class="container text-center">
                <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cadastro_cliente.php" role="button">Cadastrar</a>

                <a class="btn btn-secondary btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class=" col">
            </div>
        </div>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>