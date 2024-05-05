<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php';

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM produtos where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>

<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center mt-5">Atualizar Produtos</h1>
            <form class="form-horizontal" action="banco_de_dados/update_produto.php" method="POST">
                <div class="mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?php echo $dados['nome'] ?>" required>
                </div>
                <div class="mt-1">
                    <input type="text" name="tipo" class="form-control" id="tipo" placeholder="tipo" value="<?php echo $dados['tipo'] ?>" required>
                </div>

                <div class="mt-1">
                    <input type="hidden" name="id" class="form-control" id="id" placeholder="id" value="<?php echo $dados['id'] ?>">
                </div>

                <div class="mt-1">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-atualizar-produto">Atualizar produto</button>
                </div>
            </form>

            <div class="container text-center mt-1">
                <div class="container text-center mt-1">
                    <a class="btn btn-secondary btn-lg col-sm-3" href="produtos.php" role="button">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <?php
        include_once 'includes/footer.php';
    ?>