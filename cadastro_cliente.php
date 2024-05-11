<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php';
if (isset($_GET['erro'])) {
?>
    <div class="alert alert-danger" role="alert">
        Houve um ou mais erros no cadastro!
    </div>
<?php
}
?>

<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center mt-5">Cadastro de Clientes</h1>
            <form class="form-horizontal col-12" action="banco_de_dados/create_cliente.php" method="POST">
                <div class="mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?php if (isset($_GET['nome'])) echo $_GET['nome'] ?>" required>
                    <?php if (isset($_GET['errosNome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="mt-1">
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome" value="<?php if (isset($_GET['sobrenome'])) echo $_GET['sobrenome'] ?>" required>
                    <?php if (isset($_GET['errosSobrenome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosSobrenome'])) echo '*' . $_GET['errosSobrenome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="mt-1">
                    <input type="number" min="0" max="200" name="idade" class="form-control" id="Idade" placeholder="Idade" value="<?php if (isset($_GET['idade'])) echo $_GET['idade'] ?>" required>
                </div>
                <div class="mt-1">
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" value="<?php if (isset($_GET['cpf'])) echo $_GET['cpf'] ?>" required>
                    <?php if (isset($_GET['errosCpf'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosCpf'])) echo '*' . $_GET['errosCpf'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="text-center mt-1 mb-0">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-cliente" required>Cadastrar cliente</button>
                </div>
            </form>
            <div class="container text-center mt-1">
                <a class="btn btn-secondary btn-lg col-sm-3" href="clientes.php" role="button">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>