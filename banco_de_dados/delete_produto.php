<?php
    require_once 'conexao_banco.php';
    session_start();

    $id = mysqli_escape_string($connect, $_GET['id']); 

    $sql = "DELETE FROM produtos WHERE '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../produtos.php?sucesso');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../produtos.php?erro');
    }
?>


