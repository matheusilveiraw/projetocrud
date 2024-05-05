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

<div class="container text-center flex-grow-1">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10">
            <h1>Cadastro de Produtos</h1>

            <form class="form-horizontal" action="banco_de_dados/update_produto.php" method="POST">
                <div class="col-sm-10 mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?php echo $dados['nome']?>">
                </div>
                <div class="col-sm-10 mt-1">
                    <input type="text" name="tipo" class="form-control" id="tipo" placeholder="tipo" value="<?php echo $dados['tipo']?>">
                </div>

                <div class="col-sm-10 mt-1">
                    <input type="hidden" name="id" class="form-control" id="id" placeholder="id" value="<?php echo $dados['id']?>">
                </div>

                <div class="container text-left mt-1">
                    <button type="text" class="btn btn-danger btn-lg col-10" name="btn-atualizar-produto">Atualizar produto</button>
                </div>
            </form>

            <div class="container text-left mt-1">
                <a class="btn btn-success btn-lg col-sm-3" href="produtos.php" role="button">Lista</a>

                <a class="btn btn-warning btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class=" col">
            </div>
        </div>

        <?php
        include_once 'includes/footer.php';
        ?>