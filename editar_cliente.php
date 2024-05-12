<?php
include_once 'includes/header.php';
include_once 'banco_de_dados/conexao_banco.php';

if (isset($_GET['id'])) {
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

    print_r($_GET);
}
?>
<div class="container flex-grow-1">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1 class="text-center mt-5">Atualizar Clientes</h1>
            <form class="form-horizontal" action="banco_de_dados/update_cliente.php" method="POST">
                <div class="mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="<?php 
                    if(isset($_GET['nome'])) {
                         echo $_GET['nome'];
                    } else { 
                        echo $dados['nome']; } 
                    ?>">

                    <?php if (isset($_GET['errosNome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="mt-1">
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome" value="<?php 
                        if(isset($_GET['sobrenome'])) { 
                                echo $_GET['sobrenome'];
                            } else { 
                                echo $dados['sobrenome']; 
                            }  ?>">
                    <?php if (isset($_GET['errosSobrenome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosSobrenome'])) echo '*' . $_GET['errosSobrenome'] ?>
                        </span>
                    <?php } ?>
                </div>

                <div class="mt-1">
                    <input type="number" min="0" max="200" name="idade" class="form-control" id="Idade" placeholder="Idade" value="<?php echo $dados['idade'] ?>">
                </div>

                <div class="mt-1">
                    <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF" value="<?php 
                        if(isset($_GET['cpf'])) { 
                            echo $_GET['cpf'];
                        } else { 
                            echo $dados['cpf'];
                        }
                    ?>">
                    <?php if (isset($_GET['errosCpf'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosCpf'])) echo '*' . $_GET['errosCpf'] ?>
                        </span>
                    <?php } ?>
                </div>


                <div class="mt-1">
                    <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $dados['id'] ?>">
                </div>

                <div class="text-center mt-1">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-atualizar-cliente">Atualizar cliente</button>
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