<?php
    require_once 'conexao_banco.php';
    session_start();

    if (isset($_POST['btn-atualizar-cliente'])) {
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);
        $cpf = mysqli_escape_string($connect, $_POST['cpf']);
        $id = mysqli_escape_string($connect, $_POST['id']);

        if (!preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ]+$/u', $nome)) {
            $errosNome = 'Só aceita letras e acentos!';
        }

        if (!preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ]+$/u', $sobrenome)) {
            $errosSobrenome = 'Só aceita letras e acentos!';
        }

        if (preg_match('/^(\d{3}\.\d{3}\.\d{3}-\d{2}|\d{11})$/', $cpf)) {
            if (preg_match('/^\d{11}$/', $cpf)) $cpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
        } else {
            $errosCpf = "Formatos admitidos no CPF: 00000000000 ou 000.000.000-00";
        }

        if (isset($errosNome) || isset($errosSobrenome) || isset($errosCpf)) {
            $url = "editar_cliente.php?erro&";
            $url .= "id=" . urlencode($id);
            $url .= "&nome=" . urlencode($nome);
            $url .= "&sobrenome=" . urlencode($sobrenome);
            $url .= "&idade=" . urlencode($idade);
            $url .= "&cpf=" . urlencode($cpf);
            if (isset($errosNome)) $url .= "&errosNome=" . urlencode($errosNome);
            if (isset($errosSobrenome)) $url .= "&errosSobrenome=" . urlencode($errosSobrenome);
            if (isset($errosCpf)) $url .= "&errosCpf=" . urlencode($errosCpf);
            header('Location: ../' . $url);
        } else {
            $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', cpf = '$cpf', idade = '$idade' WHERE id = '$id'";
            if (mysqli_query($connect, $sql)) {
                $_SESSION['mensagem'] = "Atualizado com sucesso!";
                header('Location: ../clientes.php?sucessoUpdate');
            } else {
                $_SESSION['mensagem'] = "Erro ao atualizar!";
                header('Location: ../clientes.php?erroUpdate');
            }
        }
    }
?>