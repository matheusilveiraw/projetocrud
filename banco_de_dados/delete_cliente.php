<?php 
require_once 'conexao_banco.php';
session_start();

    $id = mysqli_escape_string($connect, $_GET['id']);

    echo $id;

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../clientes.php?sucesso');
    } else { 
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: ../clientes.php?erro');
    }
?>
