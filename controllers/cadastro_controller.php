<?php
    // Incluir o arquivo de conexao no programa
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

    $sql = "INSERT INTO users VALUES 
    ('$nome','$endereco','$numero','$tipo_cliente','$cpf','$cidade','$uf','$telefone','$inscricao','$email','$senha')";
 
    if (mysqli_query($connect, $sql)) {
        echo "Usuario Cadastrado com Sucesso";
    } else {
        echo "Erro ".mysqli_connect_error($connect);    
    }
    mysqli_close($connect);
?>
