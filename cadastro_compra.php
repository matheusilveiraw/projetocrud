<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php'
?>

<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center mt-5">Cadastro de compras</h1>
            <form class="form-horizontal" action="banco_de_dados/create_compra.php" method="POST">

                <div class="mt-1">
                    <select class="container form-select" aria-label=".form-select-lg example" required name="cliente" id="cliente">
                        <option disabled selected value="">Selecione um cliente</option>

                        <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($dados = mysqli_fetch_array($resultado)) {
                        ?>
                                <option value=<?php echo $dados['id'] ?>> <?php echo $dados['nome'] ?></option>
                            <?php }

                            ?>

                        <?php
                        } else {
                        ?>
                            <option disabled value="">Nenhum cliente registrado</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mt-1">
                    <select class="container form-select" aria-label=".form-select-lg example" required name="produto" id="produto">
                        <option disabled selected value="">Selecione um cliente</option>

                        <?php
                        $sql = "SELECT * FROM produtos";
                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($dados = mysqli_fetch_array($resultado)) {
                        ?>
                                <option value=<?php echo $dados['id'] ?>> <?php echo $dados['nome'] ?></option>
                            <?php }

                            ?>

                        <?php
                        } else {
                        ?>
                            <option disabled value="">Nenhum produto registrado</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mt-1">
                    <input type="text" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade" required>
                </div>
                <div class="mt-1">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-compra">Cadastrar compra</button>
                </div>
            </form>
            <div class="container text-center mt-1">
                <div class="container text-center mt-1">
                    <a class="btn btn-secondary btn-lg col-sm-3" href="compras.php" role="button">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>