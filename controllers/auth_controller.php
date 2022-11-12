<?php
    include("./connect.php");

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM users 
    WHERE email = '$email' AND senha = '$senha'";
    
    $result = $conexao->query($sql);
    var_dump(mysqli_fetch_array($result));
    if (sizeof(mysqli_fetch_array($result)) > 0) {
        echo "Login encontrado";
    } else {
        echo "login não encontrado";    
    }
    mysqli_close($connect);
?>


$result = $conexao->query($sql);