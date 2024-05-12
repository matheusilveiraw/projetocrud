<?php
    include_once 'includes/header.php';
    include_once 'banco_de_dados/conexao_banco.php';

echo $_GET['id'];

    if (isset($_GET['id'])) {
        echo 'entrou';
        $id = mysqli_escape_string($connect, $_GET['id']);
    
        $sql = "SELECT * FROM clientes where id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
        echo($dados);
    }

?>

<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center mt-5">Cadastro de compras</h1>
            <form class="form-horizontal" action="banco_de_dados/create_compra.php" method="POST">

                <div class="mt-1">
                    <select class="container form-select" aria-label=".form-select-lg example" required name="cliente" id="cliente">

                        <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($dados = mysqli_fetch_array($resultado)) {
                        ?>
                                <option value=<?php echo $dados['id'] ?>> <?php echo $dados['nome'] ?></option>
                            <?php }
                        }
                            ?>
                    </select>
                </div>
                <div class="mt-1">
                    <select class="container form-select" aria-label=".form-select-lg example" required name="produto" id="produto">
                        <?php
                        $sql = "SELECT * FROM produtos";
                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            while ($dados = mysqli_fetch_array($resultado)) {
                        ?>
                                <option value=<?php echo $dados['id'] ?>> <?php echo $dados['nome'] ?></option>
                            <?php }
                        }
                            ?>
                    </select>
                </div>
                <div class="mt-1">
                    <input type="number" min="0" max="1000" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade" required>
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