<?php 
require_once 'conexao_banco.php';
session_start();

if(isset($_POST['btn-atualizar-cliente'])) {

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../clientes.php?sucesso');
    } else { 
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../clientes.php?erro');
    }
}
?>
