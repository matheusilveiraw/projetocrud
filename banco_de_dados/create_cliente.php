<?php 
    require_once 'conexao_banco.php';
    session_start();

    if(isset($_POST['btn-cadastrar-cliente'])) {
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $cpf = mysqli_escape_string($connect, $_POST['cpf']);

        $sql = "INSERT INTO clientes (nome, sobrenome, cpf, idade) VALUES ('$nome', '$sobrenome', '$cpf', '$idade')";

        if(mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../clientes.php?sucesso');
        } else { 
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../clientes.php?erro');
        }
    }
?>