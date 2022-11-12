<?php
    include("./connect.php");

    $id = $_POST['id'];
    
    $sql = "DELETE FROM users WHERE id='$id'";

    if (mysqli_query($connect, $sql)) {
        echo "<script type='javascript'>alert('removido com sucesso!');";
        header("Location: ../clientes.php");
    } else {
        echo "Erro ".mysqli_connect_error($connect);    
    }
    mysqli_close($connect);
?>
