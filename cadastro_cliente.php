<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center">Cadastro de Clientes</h1>
            <form class="form-horizontal col-12" action="banco_de_dados/create_cliente.php" method="POST">
                <div class="mt-1"> <!-- Removido col-12 -->
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="mt-1"> <!-- Removido col-12 -->
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="mt-1"> <!-- Removido col-12 -->
                    <input type="text" name="idade" class="form-control" id="Idade" placeholder="Idade">
                </div>
                <div class="mt-1"> <!-- Removido col-12 -->
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF">
                </div>
                <div class="text-center mt-1"> 
                    <button type="text" class="btn btn-danger btn-lg col-12" name="btn-cadastrar-cliente">Cadastrar cliente</button>
                </div>
            </form>
            <div class="container text-center mt-1">
                <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cadastro_cliente.php" role="button">Cadastrar</a>
                <a class="btn btn-secondary btn-lg col-sm-3" href="index.php" role="button">Menu</a>
            </div>
        </div>
    </div>
</div>

<?php
    include_once 'includes/footer.php';
?>