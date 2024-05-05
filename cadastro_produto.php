<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container flex-grow-1">
<div class="row justify-content-center">
        <div class="col-10">
        <h1 class="text-center mt-5">Cadastro de Produtos</h1>

            <form class="form-horizontal" action="banco_de_dados/create_produto.php" method="POST">
                <div class="mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                </div>
                <div class="mt-1">
                    <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Tipo" required>
                </div>

                <div class="text-center mt-1">
                <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-produto" required>Cadastrar produto</button>
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