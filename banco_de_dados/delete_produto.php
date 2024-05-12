<?php
    require_once 'conexao_banco.php';
    session_start();

    $id = mysqli_escape_string($connect, $_GET['id']); 

    $sql = "DELETE FROM produtos WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../produtos.php?sucessoDelete');
    } else {
        $_SESSION['mensagem'] = "Erro ao deletar produto!";
        header('Location: ../produtos.php?erroDelete');
    }
?>


