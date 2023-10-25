<?php
function cadas()
{
    require 'config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome_usuario = $_POST['username'];
        $senha_usuario = $_POST['password'];

        $sql_verify = "SELECT count(*) as total FROM usuarios WHERE nome_usuario = '$nome_usuario'";
        $result = $mysqli->query($sql_verify);
        $row = $result->fetch_assoc();
        $total = $row['total'];
        
        if ($total > 0) {
            echo '<script>alert("Nome de usuário já existe. Escolha outro.");</script>';
            return;
        }

        $sql = "INSERT INTO usuarios (nome_usuario, senha_usuario) VALUES ('$nome_usuario', '$senha_usuario')";

        if ($mysqli->query($sql) === true) {
            header("Location: ../dashboard/dashboard.php");

        } else {
            echo "<script>alert('Erro na consulta: " . $mysqli->error. "');</script>";
        }
    }

    $mysqli->close();
}
?>
