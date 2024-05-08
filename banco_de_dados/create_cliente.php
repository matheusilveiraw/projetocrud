<?php
require_once 'conexao_banco.php';
session_start();

if (isset($_POST['btn-cadastrar-cliente'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);

    if (preg_match('/^(\d{3}\.\d{3}\.\d{3}-\d{2}|\d{11})$/', $cpf)) {

        if (preg_match('/^\d{11}$/', $cpf)) $cpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);

        $sql = "INSERT INTO clientes (nome, sobrenome, cpf, idade) VALUES ('$nome', '$sobrenome', '$cpf', '$idade')";

        // if(mysqli_query($connect, $sql)) {
        //     $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        //     // header('Location: ../clientes.php?sucesso');
        // } else { 
        //     $_SESSION['mensagem'] = "Erro ao cadastrar!";
        //     // header('Location: ../clientes.php?erro');
        // }
    } else {
        $url = "cadastro_cliente.php";
        $url .= "?nome=" . urlencode($nome);
        $url .= "&sobrenome=" . urlencode($sobrenome);
        $url .= "&idade=" . urlencode($idade);
        $url .= "&cpf=" . urlencode($cpf);

        header('Location: ../'.$url);
    }
}
