<?php
require_once 'conexao_banco.php';
session_start();

$id = mysqli_escape_string($connect, $_GET['id']);

$sql = "DELETE FROM clientes WHERE id = '$id'";

try {
    if ($connect->connect_error) {
        die("Falha na conexão: " . $connect->connect_error);
    }

    if ($connect->query($sql) === TRUE) {
        echo "deletou";
        header('Location: ../clientes.php?sucessoDelete');
    }
    // Fechar conexão
    $connect->close();
} catch (Exception $e) {
    // erros gerais
    echo "Erro: " . $e->getMessage();
    header('Location: ../clientes.php?erroDelete');
}
