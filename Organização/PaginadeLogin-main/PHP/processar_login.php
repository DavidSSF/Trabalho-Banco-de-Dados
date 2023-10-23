<?php
function veri(){
    require_once ('config.php');
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome_usuario = $_POST['username'];
        $senha_digitada = $_POST['password'];
        

        $sql = "SELECT nome_usuario, senha_usuario FROM usuarios WHERE nome_usuario = '$nome_usuario'";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senha_hash = $row['senha_usuario']; // Corrigi aqui, era uma sintaxe incorreta


            if ($senha_digitada == $senha_hash) {
                header("Location: ../dashboard/dashboard.php");

            } else {
                echo "<script>alert('Senha incorreta. Tente novamente.');</script>";
            }
        } else {
            echo "<script>alert('Nome de usuário não encontrado. Tente novamente.');</script>";
        }
    }

    $mysqli->close();
}
?>