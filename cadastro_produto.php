<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container text-center">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10">
            <h1>Cadastro de Produtos</h1>

            <form class="form-horizontal" action="banco_de_dados/create_produto.php" method="POST">
                <div class="col-sm-10 mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="col-sm-10 mt-1">
                    <input type="text" name="tipo" class="form-control" id="tipo" placeholder="tipo">
                </div>

                <div class="container text-left mt-1">
                <button type="text" class="btn btn-danger btn-lg col-10" name="btn-cadastrar-produto">Cadastrar produto</button>
            </div>
            </form>

            <div class="container text-left mt-1">
                <a class="btn btn-success btn-lg col-sm-3" href="produtos.php" role="button">Lista</a>

                <a class="btn btn-warning btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class="col"> </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>