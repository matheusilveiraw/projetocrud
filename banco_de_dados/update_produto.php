<?php 
require_once 'conexao_banco.php';
session_start();

if(isset($_POST['btn-atualizar-produto'])) {

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $tipo = mysqli_escape_string($connect, $_POST['tipo']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE produtos SET nome = '$nome', tipo = '$tipo' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../produtos.php?sucessoUpdate');
    } else { 
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../produtos.php?erroUpdate');
    }
}
?>
