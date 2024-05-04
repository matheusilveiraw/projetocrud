<?php 
    require_once 'conexao_banco.php';
    session_start();

    if(isset($_POST['btn-cadastrar-produto'])) {
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $tipo = mysqli_escape_string($connect, $_POST['tipo']);

        $sql = "INSERT INTO produtos (nome, tipo) VALUES ('$nome', '$tipo')";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../produtos.php?sucesso');
        } else { 
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../produtos.php?erro');
        }
    }
?>