<?php 
    include_once 'includes/header.php';
?>

<div class="grid text-center mt-5 flex-grow-1">
    <div class="col-12">
    <div class="container mt-4">
        <h1>Bem-vindo ao Projeto CRUD</h1>
        <p>Este é um projeto de exemplo para demonstrar operações CRUD (Create, Read, Update, Delete).</p>
        <p>Utilize a barra de navegação acima para explorar o site.</p>
    </div>
            <div class="container my-3">
                <a class="btn btn-primary btn-lg" href="clientes.php" role="button">Clientes</a>
            </div>

            <div class="container my-3">
                <a class="btn btn-secondary btn-lg" href="produtos.php" role="button">Produtos</a>
            </div>
        </div>
    </div>

<?php 
    include_once 'includes/footer.php';
?>