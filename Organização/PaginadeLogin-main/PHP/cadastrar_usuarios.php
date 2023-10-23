<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_usuario = $_POST['username'];
    $senha_usuario = $_POST['password']; // Hash da senha para segurança

    $sql = "INSERT INTO usuarios (nome_usuario, senha_usuario) VALUES ('$nome_usuario', '$senha_usuario')";

    if ($mysqli->query($sql) === true) {
        header("Location: ../dashboard/dashboard.php");
        
    } else {
        echo "Erro na consulta: " . $mysqli->error;
    }
}

$mysqli->close();
?>