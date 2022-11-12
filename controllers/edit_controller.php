<?php
    include("./connect.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $tipo_cliente = $_POST['tipo_cliente'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $inscricao = $_POST['inscricao'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "UPDATE users SET nome='$nome', endereco='$endereco', numero='$numero', tipo_cliente='$tipo_cliente', cpf='$cpf', cidade='$cidade', uf='$uf', telefone='$telefone', inscricao='$inscricao', email='$email', senha='$senha'
    WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) {
        header("Location: ../clientes.php");
    } else {
        echo "Erro ".mysqli_connect_error($connect);    
    }
    mysqli_close($connect);
?>
