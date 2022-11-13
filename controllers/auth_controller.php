<?php
    include("./connect.php");

    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM users 
    WHERE email = '$email' AND senha = '".$senha."'";
    
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        header("Location: ../clientes.php");
    } else {
        header("Location: ../index.php");
    }
    mysqli_close($connect);

