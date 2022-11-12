<?php
    include("./connect.php");

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

    $sql = "INSERT INTO users (nome, endereco, numero, tipo_cliente, cpf, cidade, uf, telefone, inscricao, email, senha) VALUES 
    ('$nome','$endereco','$numero','$tipo_cliente','$cpf','$cidade','$uf','$telefone','$inscricao','$email','$senha')";
    echo $sql;

    if (mysqli_query($connect, $sql)) {
        echo "<script type='javascript'>alert('Cadastro realizado com sucesso!');";
        header("Location: ../index.php");
    } else {
        echo "Erro ".mysqli_connect_error($connect);    
    }
    mysqli_close($connect);
?>
