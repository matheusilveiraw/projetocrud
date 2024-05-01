<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container text-center">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10">
            <h1>Cadastro de Clientes</h1>

            <form class="form-horizontal" action="banco_de_dados/create_cliente.php" method="POST">
                <div class="col-sm-10 mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="col-sm-10 mt-1">
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome">
                </div>

                <div class="col-sm-10 mt-1">
                    <input type="text" name="idade" class="form-control" id="Idade" placeholder="Idade">
                </div>

                <div class="col-sm-10 mt-1">
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF">
                </div>

                <div class="container text-left mt-1">
                <button type="text" class="btn btn-danger btn-lg col-10" name="btn-cadastrar-cliente">Cadastrar cliente</button>
            </div>
            </form>

            <div class="container text-left mt-1">
                <a class="btn btn-success btn-lg col-sm-3" href="cadastro_cliente.php" role="button">Cadastrar</a>

                <a class="btn btn-warning btn-lg col-sm-3" href="index.php" role="button"">Menu</a>
            </div>
        </div>
        <div class="col"> </div>
    </div>

    <?php
    include_once 'includes/footer.php';
    ?>