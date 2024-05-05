<?php 
    require_once 'conexao_banco.php';
    session_start();

    if(isset($_POST['btn-cadastrar-compra'])) {

        print_r($_POST);
        $cliente = mysqli_escape_string($connect, $_POST['cliente']);
        $produto = mysqli_escape_string($connect, $_POST['produto']);
        $quantidade = mysqli_escape_string($connect, $_POST['quantidade']);
        $data_compra = date("Y-m-d");

        $sql = "INSERT INTO compra (cliente_id, produto_id, quantidade, data_compra) VALUES ('$cliente', '$produto', '$quantidade', '$data_compra')";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../compras.php?sucesso');
        } else { 
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../compras.php?erro');
        }
    }
?>